<?php
include_once('lib/application.php');
//debug($_GET);
//debug($_SESSION['myemails'][$_GET['id']]);
$data=$_SESSION['myemails'][$_GET['id']];
?>
<html>
    <head>
        <title>edit3.php</title>
    </head>
    <body>
        <h1>Edit....</h1>
        <p>change your Information  </p>
        <section>
            <form action="store3.php" method="post">
                <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
        <fieldset>
                <ul>
                    <li>
                        <?php 
                        if($data['manner']=="Natural")
                        {
                        ?>
                         <label for="manner1"></label>
                         <input type="radio" name="manner" id="manner1" value="Natural" checked="checked">Natural
                        <?php 
                        }else{
                        ?>
                        <input type="radio" name="manner" id="manner1" value="Natural">Natural
                        <?php }?>
                    </li>
                    <li>
                        <?php 
                        if($data['manner']=="Accident")
                        {
                        ?>
                        <label for="manner2"></label>
                             <input type="radio" name="manner" id="manner2" value="Accident" checked="checked">Accident
                        <?php 
                        }else{
                        ?>
                       <input type="radio" name="manner" id="manner2" value="Accident">Accident
                        <?php }?>
                        
                    </li>
                    <li>
                        <?php 
                        if($data['manner']=="killed")
                        {
                        ?>
                         <label for="manner3"></label>
                             <input type="radio" name="manner" id="manner3" value="killed" checked="checked">killed
                        <?php 
                        }else{
                        ?>
                         <input type="radio" name="manner" id="manner3" value="killed">killed
                        <?php }?>
                        
                    </li>
                    <li>
                        <?php 
                        if($data['manner']=="Suicied")
                        {
                        ?>
                          <label for="manner4"></label>
                             <input type="radio" name="manner" id="manner4" value="Suicied" checked="checked">Suicied 
                        <?php 
                        }else{
                        ?>
                         <input type="radio" name="manner" id="manner4" value="Suicied">Suicied 
                        <?php }?>
                         
                    </li>
                </ul>
            </fieldset>
                <input type="submit" name="btn" value="submit">
                <input type="reset" name="btn" value="reset">
            </form>
            </section>
        <a href="index.php">Back</a>
    </body>
</html>