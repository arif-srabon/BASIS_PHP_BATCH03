<?php
include_once('lib/application.php');
//debug($_GET['id']);
$data=($_SESSION['myemails'][$_GET['id']]);
?>

<html>
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    </head>
    <body>
<h1>Your Details</h1>
<dl>
    <dt>Your First Name</dt>
        <dd>
            <?php 
            if(array_key_exists('firstname', $data) && !empty($data['firstname']))
                    
            {
                echo $data['firstname'];
            }
            else{
                echo "Not Provided";
            }
            ?>
        </dd>
    
    <dt>Your Last Name</dt>
        <dd>
            <?php
            if(array_key_exists('lastname', $data) && !empty($data['lastname']))
                    
            {
               echo $data['lastname'];
            }
 else {
     echo "NOt Provided";
 }
            ?>
        </dd>
        <dt>Your Middle Name</dt>
        <dd>
            <?php
            if(array_key_exists('mname', $data) && !empty($data['mname']))
                    
            {
               echo $data['mname'];
            }
 else {
     echo "NOt Provided";
 }
            ?>
        </dd>
        
        <dt>Your Date of Birth</dt>
        <dd>
            <?php
            if(array_key_exists('dob', $data) && !empty($data['dob']))
                    
            {
               echo $data['dob'];
            }
 else {
     echo "NOt Provided";
 }
            ?>
        </dd>
        
         <dt>Gender</dt>
        <dd>
            <?php
            if(array_key_exists('gender', $data) && !empty($data['gender']))
                    
            {
               echo $data['gender'];
            }
 else {
     echo "NOt Provided";
 }
            ?>
        </dd>
         <dt>Your Social Security Number is </dt>
        <dd>
            <?php
            if(array_key_exists('ssn', $data) && !empty($data['ssn']))
                    
            {
               echo $data['ssn'];
            }
 else {
     echo "NOt Provided";
 }
            ?>
        </dd>
        
        <dt>Your Social Security Number is </dt>
        <dd>
            <?php
            if(array_key_exists('facilityname', $data) && !empty($data['facilityname']))
                    
            {
               echo $data['facilityname'];
            }
 else {
     echo "NOt Provided";
 }
            ?>
        </dd>
</dl>
<h1>Decedent of Hispanic Origin:</h1>
<dl>
    <dt>Your origin is:</dt>
    <dd>
         <?php
                  if(array_key_exists('origin',$data) && !empty($data['origin']))
                  {
                    echo $data['origin'];
                  }
                  ?> 
    </dd>
</dl>
<h1>Manner of Death:</h1>
<dl>
    <dt>Manner IS:</dt>
    <dd>
        <?php 
        if(array_key_exists('manner',$data) && !empty($data['manner']))
        {
            echo $data['manner'];
        }
        ?>
    </dd>
</dl>
<nav>
    <ul>
        <li><a href="index.php">list</li>
        <li><a href="create.php">Create</li>
        <li><a href="#">Edit </li>
        <li><a href="#">Delete </li>
    </ul>
</nav>
    </body>
</html>