<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Create a Record</title>
  </head>
  <body class="container">
    <h1>Use the form below to create a record in the SCP Database</h1>
    <p><a href="index.php" class="btn btn-primary">Back To Main</a></p>
    
    
    <form method="post" action="connection.php" class="form-group">
        <label>Enter Item Number</label>
        <br>
        <input type="text" name="item" placeholder="Item Number" class="form-control">
        <br><br>
        <label>Enter Object</label>
        <br>
        <input type="text" name="object" placeholder="Object" class="form-control">
        <br><br>
        <label>Enter Containment</label>
        <br>
        <input type="text" name="containment" placeholder="Item Containment Proceedure" class="form-control">
        <br><br>
        <label>Enter Description</label>
        <br>
        <input type="text" name="description" placeholder="Description" class="form-control">
        <br><br>
        <label>Enter Title</label>
        <br>
        <input type="text" name="heading" placeholder="Title" class="form-control">
        <br><br>
        <label>Enter Description</label>
        <br>
        <input type="text" name="description2" placeholder="Description" class="form-control">
        <br><br>
        <label>Enter Description</label>
        <br>
        <input type="text" name="description3" placeholder="Description" class="form-control">
        <br><br>
        <label>Enter Title</label>
        <br>
        <input type="text" name="heading2" placeholder="Title" class="form-control">
        <br><br>
        <label>Enter Description</label>
        <br>
        <input type="text" name="description4" placeholder="Description" class="form-control">
        <br><br>
        <label>Enter Image Address</label>
        <br>
        <input type="text" name="image" placeholder="Image" class="form-control">
        <br><br>
        <input type="submit" name="submit" value="submit" class="btn btn-dark">
        <br><br>
        
        
    </form>

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