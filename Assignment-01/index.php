<?php
include_once('lib/application.php');
//debug($_SESSION);
?>
<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    </head>
    <body>
        <p><a href="create.html" >Click Here </a> to add an Email</p>
        | Download | PDF | XL |
        <table border="1">
            <tr>
                <th>SL</th>
                <th>First Name</th>
                <th>Last Name</th>
                 <th>Middle Name</th>
                 <th>Date of Birth</th>
                 <th>Gender</th>
                 <th>Social Security Number</th>
                 <th>Facility Name</th>
                <th>Action</th>
            </tr>
            <?php
            if(array_key_exists('myemails', $_SESSION)&& !empty($_SESSION['myemails'])){
             foreach($_SESSION['myemails'] as $key=>$value){
             ?>            
            <tr>
                <th>
                    <?php
                    echo $key+1;
                    ?>
                </th>
                <th> 
                <?php
                if(array_key_exists('firstname', $value)&& !empty($value['firstname']))
                {
                echo $value['firstname'];
                }
                ?>
                   
                </th>
                <th>
                    <?php
                    if(array_key_exists('lastname', $value) && !empty($value['lastname']))
                {
                    echo $value['lastname'];
                }
                    ?>
                </th>
                <th>
                    <?php
                    if(array_key_exists('mname', $value) && !empty($value['mname']))
                {
                    echo $value['mname'];
                }
                    ?>
                </th>
                
                <th>
                    <?php
                    if(array_key_exists('dob', $value) && !empty($value['dob']))
                {
                    echo $value['dob'];
                }
                    ?>
                </th>
                 <th>
                    <?php
                    if(array_key_exists('gender', $value) && !empty($value['gender']))
                {
                    echo $value['gender'];
                }
                    ?>
                </th>
                <th>
                    <?php
                    if(array_key_exists('ssn', $value) && !empty($value['ssn']))
                {
                    echo $value['ssn'];
                }
                    ?>
                </th>
                
                <th>
                    <?php
                    if(array_key_exists('facilityname', $value) && !empty($value['facilityname']))
                {
                    echo $value['facilityname'];
                }
                    ?>
                </th>
                <th><a href="show.php?id=<?php echo $key;?>" > view </a>| 
                     <a href="edit.php?id=<?php echo $key; ?>" >Edit</a> | 
                     <a href="delete.php?id=<?php echo $key;?>" >Delete</a>| 
                </th>
            </tr>
            <?php
             }
            }
            else{
            ?>
            <tr>
                <td colspan="9"><h1>NO Data Available !</h1> </td>
            </tr>
            
            <?php
            }
            ?>
        </table>
        
          <h3> Decedent of Hispanic Origin</h3></br>
        <table border="1">
            <tr>
                <th>SL</th>
                <th>Decedent origin </th>
                <th>Action</th>
            </tr>
            <?php 
            if(array_key_exists("myemails",$_SESSION) && !empty($_SESSION['myemails']))
            {
                foreach($_SESSION['myemails'] as $key1=>$origin)
                {
            ?>
            <tr>
                 <th> <?php echo $key1+1;?></th>
              <th> 
                  <?php
                  if(array_key_exists("origin",$origin) && !empty($origin['origin']))
                  {
                    echo $origin['origin'];
                  }
                  ?> 
              </th>
                <th>
                    <a href="show.php?id=<?php echo $key1;?>" > view </a> | 
                     <a href="edit1.php?id=<?php echo $key1; ?>" >Edit</a> | 
                     <a href="delete.php?id=<?php echo $key1;?>" >Delete</a> |
                </th>
            </tr>
            <?php 
                }
             }  else {
                 ?>
            <tr>
                <th colspan="3"><h1>NO Data Available !</h1> </th>
            </tr>
            <?php
                }
            ?>
        </table>
          <h3>Decedents Race </h3>
          <table border="1">
              <tr> 
                 <th>SL</th>
                  <th>Decedents Race</th>
                  <th>Action</th>
              </tr>
              <?php 
              if(array_key_exists('myemails',$_SESSION) && !empty($_SESSION['myemails']))
              {
                  foreach ($_SESSION['myemails'] as $key2=>$race)
                  {
              ?>
              <tr>
                  <th><?php echo $key2+1; ?> </th>
                  <th>
                   <?php 
                  if(array_key_exists("race",$race) && !empty($race['race']))
                  {
                      echo $race['race'];
                  }
                    ?>
                </th>
                  <th>
                      <a href="show.php?id=<?php echo $key2;?>">View</a> |
                      <a href="edit2.php?id=<?php echo $key2;?>">Edit</a> |
                      <a href="delete.php?id=<?php echo $key2;?>">Delete</a> |
                  </th>
              </tr>
              <?php
                  }
              }else{
              ?>
              <tr>
                  <th colspan="3"><h1>NO Data Available !</h1></th>
              </tr>
                  <?php }?>
              
          </table>
          <br>
          <h1>Manner of Death</h1>
          <table border="1">
              <tr>
                  <th>SL</th>
                   <th>Manner of Death</th>
                    <th>Action</th>
              </tr>
              <?php 
              if(array_key_exists('myemails',$_SESSION) && !empty($_SESSION['myemails']))
              {
                  foreach ($_SESSION['myemails'] as $key3=>$manner)
                  {
              ?>
               <tr>
                  <th><?php echo $key3+1;?></th>
                   <th>
                       <?php
                       if(array_key_exists('manner', $manner) && !empty($manner['manner']))
                       {
                       echo $manner['manner'];
                       }
                       ?>
                   </th>
                    <th>
                        <a href="show.php?id=<?php echo $key3;?>">View</a> |
                        <a href="edit3.php?id=<?php echo $key3;?>">Edit</a> |
                       <a href="delete.php?id=<?php echo $key3;?>">Delete</a> ||
                    </th>
              </tr>
              <?php 
                  }
              }else{
              ?>
              <th colspan="3"><h1>No Data Available !</h1></th>
              <?php }?>
          </table>
    </body>
</html>