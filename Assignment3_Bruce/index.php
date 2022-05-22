<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Assignment 3-COMP:5210-Semester 1 2022</title>
  </head>
  <body class="container">
    <?php
    
    include 'connection.php';
    
    ?>
    
    <div>
        <ul class="nav navbar-dark bg-dark">
            
            <!-- Run php loop through table and display model field here -->
            <?php foreach($result as $link): ?>
            
            <li class="nav-item active"><a href="index.php?link='<?php echo $link['item']; ?>'" class="nav-link text-white"><?php echo $link['item']; ?></a></li>
            
            <?php endforeach; ?>
            
            <li class="nav-item active"><a href="form.php" class="nav-link text-white">Add SCP File</a></li>
        </ul>
    </div>
    <h1 class="display-1"><strong>SCP Database</strong></h1>
        <h2>
            <small class="text-muted"><em>Strickly Confidential</em></small>
        </h2>
    
    <div class="card card-body shadow">
        <?php
        
        if(isset($_GET['link']))
        {
            $item = trim($_GET['link'], "'");
            
            
            // Run sql command to retrieve record based on GET value
            $record = $connection->query("select * from files where item = '$item'");
            
            // Turn record into an associative array
            $array = $record->fetch_assoc();
            
            // varibles to hold our update and delete url strings
            $id = $array['id'];
            $update = "update.php?update=" . $id;
            $delete = "connection.php?delete=" . $id;
            
            echo "
            <style>
            img {
                max-width: 100%;
                height: auto;
            }
            </style>
            <h2 class='card-title'>{$array['item']}</h2>
            <h4>{$array['object']}</h4>
            <p>{$array['containment']}</p>
            <div class='card card-body shadow mb-3'>
            <p class='text-center'><img src='{$array['image']}'></p>
            </div>
            <p class='card-text'>{$array['description']}</p>
            <h3 class='card-text'>{$array['heading']}</h3>
            <p class='card-text'>{$array['description2']}</p>
            <p class='card-text'>{$array['description3']}</p>
            <h3 class='card-text'>{$array['heading2']}</h3>
            <p class='card-text'>{$array['description4']}</p>
            
            
            <p>
                <a href='{$update}' class='btn btn-warning'>Update Record</a>
                <a href='{$delete}' class='btn btn-danger'>Delete Record</a>
                
            </p>
            <p>
                <a href='index.php' class='btn btn-primary'>Back to Main</a>
            </p>
            
            
            ";
            
        }
        else
        {
            // default view that user sees when visiting for the first time
            echo "
            <style>
            img {
                max-width: 100%;
                height: auto;
            }
            </style>
            <div class='alert alert-info' role='alert'>
            <p>
                <strong>
                    <em>Click on the links above to view SCP subject files.</em>
                </strong>
            </p>
            </div>
            <p><img src='images/logo.jpg'></p>
            <div class='alert alert-secondary role='alert'>
            <p>This database has been created and is maintained by Student #22717743</p>
            </div>
            ";
        }
        
        
        ?>
    </div>
    

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>