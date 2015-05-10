<?php
include_once 'lib/application.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <a href="create.html">Add</a> New Info
        <table border="1">
            <tr>
                <td>Sl</td>
                <td>First Name</td>
                <td>Middle Name</td> 
                <td>Last Name</td> 
                <td>Date of Birth</td> 
                <td>Gender</td> 
                <td>Social Security Number</td> 
                <td>Facility Name</td> 
                <td>Action</td>
            </tr>
   
            <?php 
             $counter=1;          
            foreach($_SESSION['name'] as $name)
            { 
                     
                    
           ?>
            
            <tr>
                <td><?php echo $counter++; ?></td>
                <td><?php echo $name['fname'];?></td>
                <td><?php echo $name['mname'];?></td>
                <td><?php echo $name['lname'];?></td>
                <td><?php echo $name['dBirth'];?></td>
                <td><?php echo $name['Gender'];?></td>
                <td><?php echo $name['sSNumber'];?></td>
                <td><?php echo $name['facName'];?></td>
                <td>
                    <a href="show.php">View</a>
                    <a href="edit.php">Edit</a>
                    <a href="delete.php">Delete</a>
                
                </td>
            </tr>
            
                       
                 <?php } ?>
  
        </table>
        <table border="1">
            <tr>
                <th>Sl</th>
                <th>Decedent of Hispanic Origin</th>
                <th>Action</th>
            </tr>
   
            <?php 
             $counter=1;          
            foreach($_SESSION['name'] as $name){ 
                       
           ?>
            
            <tr>
                <td><?php echo $counter++; ?></td>
                <td><?php echo $name['origin'];?></td>
           
                <td>
                    <a href="show.php">View</a>
                    <a href="edit.php">Edit</a>
                    <a href="delete.php">Delete</a>
                
                </td>
            </tr>
                 <?php } ?>
  
        </table>
        
        
        <table border="1">
            <tr>
                <th>Sl</th>
                <th>Decedent's Race</th>
                <th>Action</th>
            </tr>
   
            <?php 
             $counter=1;          
            foreach($_SESSION['name'] as $name){ 
                       
           ?>
            
            <tr>
                <td><?php echo $counter++; ?></td>
                <td><?php echo $name['race'];?></td>
           
                <td>
                    <a href="show.php">View</a>
                    <a href="edit.php">Edit</a>
                    <a href="delete.php">Delete</a>
                
                </td>
            </tr>
                 <?php } ?>
  
        </table>
        
        <table border="1">
            <tr>
                <th>Sl</th>
                <th>Date Pronounced Dead</th>
                <th>Time Pronounced Dead</th>
                <th>Signature Of Person Pronouncing Death</th>
                <th>License Number</th>
                <th>Date Signed</th>
                <th>Actual or Presumed date of birth</th>
                <th> Actual or Presumed Time of Death</th>
                <th>Was Medical Examiner or Coroner Contacted? </th>
                <th>Action</th>
            </tr>
   
            <?php 
             $counter=1;          
            foreach($_SESSION['name'] as $name){ 
                       
           ?>
            
            <tr>
                <td><?php echo $counter++; ?></td>
                <td><?php echo $name['date'];?></td>
                <td><?php echo $name['time'];?></td>
                <td><?php echo $name['signature'];?></td> 
                <td><?php echo $name['licenseNumber'];?></td>
                <td><?php echo $name['dateOfSigned'];?></td>
                <td><?php echo $name['actualBirthDate'];?></td>
                <td><?php echo $name['actualTime'];?></td>
                 <td><?php echo $name['coroner'];?></td>
           
                <td>
                    <a href="show.php">View</a>
                    <a href="edit.php">Edit</a>
                    <a href="delete.php">Delete</a>
                
                </td>
            </tr>
                 <?php } ?>
  
        </table>
        
        <table border="1">
            <tr>
                <th>Sl</th>
                <th>Immediate cause</th>
                <th>Due to</th>
                <th>Onset to death</th>
                <th>Sequentially list Conditions</th>
                <th>Due to</th>
                <th>Onset to death</th>
                <th>Enter the Underlying Cause</th>
                <th>Due to</th>
                <th>Onset to death</th>
                <th>Last</th>
                <th>Onset to death</th>
                <th>Action</th>
            </tr>
   
            <?php 
             $counter=1;          
            foreach($_SESSION['name'] as $name){ 
                       
           ?>
            
            <tr>
                <td><?php echo $counter++; ?></td>
                <td><?php echo $name['immediateCause'];?></td>
                <td><?php echo $name['due'];?></td>
                <td><?php echo $name['onsetToDeath1'];?></td> 
                <td><?php echo $name['sequentially'];?></td>
                <td><?php echo $name['due1'];?></td>
                <td><?php echo $name['onsetToDeath2'];?></td>
                <td><?php echo $name['underlyingCause'];?></td>
                 <td><?php echo $name['due2'];?></td>
                  <td><?php echo $name['onsetToDeath3'];?></td>
                <td><?php echo $name['last'];?></td>
                <td><?php echo $name['onsetToDeath4'];?></td>
           
                <td>
                    <a href="show.php">View</a>
                    <a href="edit.php">Edit</a>
                    <a href="delete.php">Delete</a>
                
                </td>
            </tr>
                 <?php } ?>
  
        </table>
        
        <table border="1">
            <tr>
                <th>Sl</th>
                <th>Comments</th>
            </tr>
   
            <?php 
             $counter=1;          
            foreach($_SESSION['name'] as $name){ 
                       
           ?>
            
            <tr>
                <td><?php echo $counter++; ?></td>
                <td><?php echo $name['comment'];?></td>
                
           
                <td>
                    <a href="show.php">View</a>
                    <a href="edit.php">Edit</a>
                    <a href="delete.php">Delete</a>
                
                </td>
            </tr>
                 <?php } ?>
  
        </table>
        
        <table border="1">
            <tr>
                <th>Sl</th>
                <th>Was an Autospy Performed? </th>
                <th>Where Autospy Findings Available To Complete The Cause of Death?  </th>
                <th> Did Tobacco Use Contribute To Death?</th>
            </tr>
   
            <?php 
             $counter=1;          
            foreach($_SESSION['name'] as $name){ 
                       
           ?>
            
            <tr>
                <td><?php echo $counter++; ?></td>
                <td><?php echo $name['autospy'];?></td>
                <td><?php echo $name['autospyF'];?></td>
                <td><?php echo $name['tobacco'];?></td>
                
           
                <td>
                    <a href="show.php">View</a>
                    <a href="edit.php">Edit</a>
                    <a href="delete.php">Delete</a>
                
                </td>
            </tr>
                 <?php } ?>
  
        </table>
        
        <table border="1">
            <tr>
                <th>Sl</th>
                <th>If Female</th>
             
            </tr>
   
            <?php 
             $counter=1;          
            foreach($_SESSION['name'] as $name){ 
                       
           ?>
            
            <tr>
                <td><?php echo $counter++; ?></td>
                <td><?php echo $name['ifFemale'];?></td>
                
                
           
                <td>
                    <a href="show.php">View</a>
                    <a href="edit.php">Edit</a>
                    <a href="delete.php">Delete</a>
                
                </td>
            </tr>
                 <?php } ?>
  
        </table>
        
        <table border="1">
            <tr>
                <th>Sl</th>
                <th>Manner Of Death</th>
             
            </tr>
   
            <?php 
             $counter=1;          
            foreach($_SESSION['name'] as $name){ 
                       
           ?>
            
            <tr>
                <td><?php echo $counter++; ?></td>
                <td><?php echo $name['manner'];?></td>
                
                
           
                <td>
                    <a href="show.php">View</a>
                    <a href="edit.php">Edit</a>
                    <a href="delete.php">Delete</a>
                
                </td>
            </tr>
                 <?php } ?>
  
        </table>
        
        <table border="1">
            <tr>
                <th>Sl</th>
                <th>Date of Injury</th>
                <th>Time of Injury</th>
                <th>Place of Injury</th>
                <th>Injury At Work?</th>
             
            </tr>
   
            <?php 
             $counter=1;          
            foreach($_SESSION['name'] as $name){ 
                       
           ?>
            
            <tr>
                <td><?php echo $counter++; ?></td>
                <td><?php echo $name['dateOfInjury'];?></td>
                <td><?php echo $name['timeOfInjury'];?></td>
                <td><?php echo $name['placeOfInjury'];?></td> 
                <td><?php echo $name['injuryAtWork'];?></td>
              
           
                <td>
                    <a href="show.php">View</a>
                    <a href="edit.php">Edit</a>
                    <a href="delete.php">Delete</a>
                
                </td>
            </tr>
                 <?php } ?>
  
        </table>
        
        <table border="1">
            <tr>
                <th>Sl</th>
                <th>State</th>
                <th>City or Town</th>
                <th>Street and Number</th>
                <th>Apartment No</th>
                <th>Zip Code</th>
             
            </tr>
   
            <?php 
             $counter=1;          
            foreach($_SESSION['name'] as $name){ 
                       
           ?>
            
            <tr>
                <td><?php echo $counter++; ?></td>
                <td><?php echo $name['state'];?></td>
                <td><?php echo $name['city'];?></td>
                <td><?php echo $name['streetAndNumber'];?></td> 
                <td><?php echo $name['apartmentNo'];?></td>
                <td><?php echo $name['zipCode1'];?></td>
              
           
                <td>
                    <a href="show.php">View</a>
                    <a href="edit.php">Edit</a>
                    <a href="delete.php">Delete</a>
                
                </td>
            </tr>
                 <?php } ?>
  
        </table>
        
        <table border="1">
            <tr>
                <th>Sl</th>
                <th>Describe How Injury Occurred</th>
            </tr>
   
            <?php 
             $counter=1;          
            foreach($_SESSION['name'] as $name){ 
                       
           ?>
            
            <tr>
                <td><?php echo $counter++; ?></td>
                <td><?php echo $name['comment2'];?></td>
                
           
                <td>
                    <a href="show.php">View</a>
                    <a href="edit.php">Edit</a>
                    <a href="delete.php">Delete</a>
                
                </td>
            </tr>
                 <?php } ?>
  
        </table>
        
        <table border="1">
            <tr>
                <th>Sl</th>
                <th>If Transportation Injury</th>
                  <th>Other (Specify)</th>
             
            </tr>
   
            <?php 
             $counter=1;          
            foreach($_SESSION['name'] as $name){ 
                       
           ?>
            
            <tr>
                <td><?php echo $counter++; ?></td>
                <td><?php echo $name['transportationInjury'];?></td>
                <td><?php echo $name['transportationInjury1'];?></td>

                <td>
                    <a href="show.php">View</a>
                    <a href="edit.php">Edit</a>
                    <a href="delete.php">Delete</a>
                
                </td>
            </tr>
                 <?php } ?>
  
        </table>
        
        <table border="1">
            <tr>
                <th>Sl</th>
                <th>Certifier</th>
                  <th>Signature of Certifier</th>
             
            </tr>
   
            <?php 
             $counter=1;          
            foreach($_SESSION['name'] as $name){ 
                       
           ?>
            
            <tr>
                <td><?php echo $counter++; ?></td>
                <td><?php echo $name['certifier'];?></td>
                <td><?php echo $name['certifier1'];?></td>

                <td>
                    <a href="show.php">View</a>
                    <a href="edit.php">Edit</a>
                    <a href="delete.php">Delete</a>
                
                </td>
            </tr>
                 <?php } ?>
  
        </table>
        
        <table border="1">
            <tr>
                <th>Sl</th>
                <th>Name</th>
                <th>Address</th>
                <th>ZIP code</th>
                <th>Title of certifier</th>
                <th>License Number</th>
                <th>Date Certified</th>
               
             
            </tr>
   
            <?php 
             $counter=1;          
            foreach($_SESSION['name'] as $name){ 
                       
           ?>
            
            <tr>
                <td><?php echo $counter++; ?></td>
                <td><?php echo $name['name1'];?></td>
                <td><?php echo $name['address'];?></td>
                <td><?php echo $name['zipCode'];?></td>
                <td><?php echo $name['titleOfCertifier'];?></td>
                <td><?php echo $name['licenseNumber'];?></td>
                <td><?php echo $name['dateCertified'];?></td>
            

                <td>
                    <a href="show.php">View</a>
                    <a href="edit.php">Edit</a>
                    <a href="delete.php">Delete</a>
                
                </td>
            </tr>
                 <?php } ?>
  
        </table>
    </body>
</html>
