<?php

    // Database credentials
    $user = "";
    $pw = "";
    $db = "";
    
    // Database connection
    $connection = new mysqli('localhost', $user, $pw, $db);
    
    
    
    // Variable that returns all records in the database
    $result = $connection->query("select * from files");
    
    // check if form data has been sent via post
    if(isset($_POST['submit']))
    {
        // create variables from our form post data
        $item = $connection -> real_escape_string($_POST['item']);
        $object = $connection -> real_escape_string($_POST['object']);
        $containment = $connection -> real_escape_string($_POST['containment']);
        $description = $connection -> real_escape_string($_POST['description']);
        $description2 = $connection -> real_escape_string($_POST['description2']);
        $description3 = $connection -> real_escape_string($_POST['description3']);
        $description4 = $connection -> real_escape_string($_POST['description4']);
        $heading = $connection -> real_escape_string($_POST['heading']);
        $heading2 = $connection -> real_escape_string($_POST['heading2']);
        $image = $connection -> real_escape_string($_POST['image']);
        
        // create a sql insert command
        $insert = "insert into files(item, object, containment, description, heading, description2, description3, heading2, description4, image) values('$item','$object','$containment','$description','$heading','$description2','$description3','$heading2','$description4','$image')";
        
        if($connection->query($insert) == TRUE)
        {
            echo "
                <style>
                body{font-fmaily: sans-serif}
                a {
                    background-color: blue;
                    border: none;
                    color: white;
                    padding: 15px 32px;
                    text-align: center;
                    text-decoration: none;
                    display: inline-block;
                    font-size: 20px;
                
                </style>
                
                <h1>Record added succesfully</h1>
                <p><a href='index.php'>Return to Main page</a></p>
                    
            ";
        }
        else
        {
           echo "
           <style>
                body{font-fmaily: sans-serif}
                a {
                    background-color: red;
                    border: none;
                    color: white;
                    padding: 15px 32px;
                    text-align: center;
                    text-decoration: none;
                    display: inline-block;
                    font-size: 20px;
                }
                </style>
                
           <h1>Error submitting data</h1>
           <p>{$connection->error}</p>
           <p><a href='form.php'>Return to form page</a></p>
           " ;
        }
        
    } // end isset post
    
    if(isset($_POST['update']))
    {
        // create variables from our form post data
        $id = $connection -> real_escape_string($_POST['id']);
        $item = $connection -> real_escape_string($_POST['item']);
        $object = $connection -> real_escape_string($_POST['object']);
        $containment = $connection -> real_escape_string($_POST['containment']);
        $description = $connection -> real_escape_string($_POST['description']);
        $heading = $connection -> real_escape_string($_POST['heading']);
        $description2 = $connection -> real_escape_string($_POST['description2']);
        $description3 = $connection -> real_escape_string($_POST['description3']);
        $heading2 = $connection -> real_escape_string($_POST['heading2']);
        $description4 = $connection -> real_escape_string($_POST['description4']);
        $image = $connection -> real_escape_string($_POST['image']);
        
        // create a sql update command
        $update = "update files set item='$item', object='$object', containment='$containment', description='$description', heading='$heading', description2='$description2', description3='$description3', heading2='$heading2', description4='$description4', image='$image' where id='$id'";
        
        if($connection->query($update) == TRUE)
        {
            echo "
            <style>
                body{font-fmaily: sans-serif}
                a {
                    background-color: blue;
                    border: none;
                    color: white;
                    padding: 15px 32px;
                    text-align: center;
                    text-decoration: none;
                    display: inline-block;
                    font-size: 20px;
                }
                </style>
                
                <h1>Record updated succesfully</h1>
                <p><a href='index.php'>Return to Main page</a></p>
                
            ";
        }
        else
        {
           echo "
           <style>
                body{font-fmaily: sans-serif}
                a {
                    background-color: red;
                    border: none;
                    color: white;
                    padding: 15px 32px;
                    text-align: center;
                    text-decoration: none;
                    display: inline-block;
                    font-size: 20px;
                }
                </style>
                
           <h1>Error updating data</h1>
           <p>{$connection->error}</p>
           <p><a href='update.php'>Return to update page</a></p>
           " ;
        }
        
    } // end update post
    
    // delete record
    if(isset($_GET['delete']))
    {
        $id = $_GET['delete'];
        
        // delete sql command
        $del = "delete from files where id=$id";
        
        if($connection->query($del) === TRUE)
        {
            echo "
                <style>
                    body{font-family: sans-serif;}
                    a{
                        background-color: blue;
                        border: none;
                        color: white;
                        padding: 16px 32px;
                        text-align: center;
                        text-decoration: none;
                        display: inline-block;
                        font-size: 20px;
                    }
                </style>
                
                <h1>Record Deleted</h1>
                <p><a href='index.php'>Back to Main page</a></p>
            ";
        }
        else
        {
             echo "
                <style>
                    body{font-family: sans-serif;}
                    a{
                        background-color: Red;
                        border: none;
                        color: white;
                        padding: 16px 32px;
                        text-align: center;
                        text-decoration: none;
                        display: inline-block;
                        font-size: 20px;
                    }
                </style>
                
                <h1>Error deleting record</h1>
                <p>{$connection->error}</p>
                <p><a href='index.php'>Back to Main page</a></p>
            ";
        }
    }// End Delete Page

?>