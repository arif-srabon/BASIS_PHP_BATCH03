<?php
include_once('lib/application.php');
//debug($_GET);
//debug($_SESSION['myemails']);
$data = ($_SESSION['myemails'][$_GET['id']]);
?>
<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    </head>
    <body>
        <h1>Edit....</h1>
        <p>change your Information  </p>
        <section>
            <form action="store1.php" method="post">
                <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
                 <h3> Decedent of Hispanic Origin</h3></br>
            <hr>
            <fieldset>
                <legend>Section2</legend>
                <ul>
                    <li>
                        <?php 
                        if($data['origin']=='No, NOt Spanish')
                        {
                        ?>
                        <label for="origin1"></label>
                 <input type="radio" name="origin" id="origin1" value="No, NOt Spanish" checked="checked"> No, NOt Spanish
                        <?php 
                        
                        }else{
                        ?>
                 <input type="radio" name="origin" id="origin1" value="No, NOt Spanish">  No, NOt Spanish
                        <?php }?>
                    </li>
                    <li>
                        <?php 
                        if($data['origin']=='Yes, Spanish')
                        {
                        ?>
                        <label for="origin2"></label>
                <input type="radio" name="origin" id="origin2" value="Yes, Spanish" checked="checked"> Yes, Spanish
                        <?php 
                        
                        }else{
                        
                        ?>
                <input type="radio" name="origin" id="origin2" value="Yes, Spanish"> Yes, Spanish
                <?php 
                        }
                ?>
                    </li>
                    <li>
                        <?php 
                        if($data['origin']=='No, English')
                        {
                        ?>
                         <label for="origin3"></label>
                <input type="radio" name="origin" id="origin3" value="No, English" checked="checked" > No, English
                        <?php } else{?>
                <input type="radio" name="origin" id="origin3" value="No, English" > No, English
                        <?php }?>
                    </li>
                    <li>
                        <?php 
                        if($data['origin']=='Yes, English')
                        {
                        ?>
                         <label for="origin4"></label>
                <input type="radio" name="origin" id="origin4" value="Yes, English" checked="checked"> Yes, English
                <?php 
                        }else{
                ?>
                 <input type="radio" name="origin" id="origin4" value="Yes, English"> Yes, English
                        <?php }?>
                    </li>
                    <li>
                          <?php 
                          if($data['origin']=='No, Not Bangladeshi')
                          {
                        ?>
                         <label for="origin5"></label>
                <input type="radio" name="origin" id="origin5" value="No, Not Bangladeshi" checked="checked"> No, Not Bangladeshi
                <?php 
                          }else{
                ?>
                 <input type="radio" name="origin" id="origin5" value="No, Not Bangladeshi" > No, Not Bangladeshi
                          <?php }?>
                    </li>
                    <li>
                        <?php 
                          if($data['origin']=='Yes, Bangladeshi')
                          {
                        ?>
                         <label for="origin6"></label>
                <input type="radio" name="origin" id="origin6" value="Yes, Bangladeshi" checked="checked"> Yes, Bangladeshi
                <?php 
                          }else{
                ?>
                 <input type="radio" name="origin" id="origin6" value="Yes, Bangladeshi"> Yes, Bangladeshi
                          <?php }?>
                    </li>
                </ul>
            </fieldset>    
              <input type="submit" name="btn" value="submit">
              <input type="reset" name="reset" value="reset">
            </form>
        </section>
        <a href="index.php">Back</a>
    </body>
</html>
