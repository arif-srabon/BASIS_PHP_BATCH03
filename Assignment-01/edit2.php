<?php
include_once('lib/application.php');
//debug($_GET);
//debug($_SESSION['myemails'][$_GET['id']]);
$data=$_SESSION['myemails'][$_GET['id']];
?>
<html>
    <head>
        <title>edit2.php</title>
    </head>
    <body>
        <h1>Edit....</h1>
        <p>change your Information  </p>
        <section>
            <form action="store2.php" method="post">
                <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
        <fieldset>
                <ul>
                    <li>
                        <?php 
                        if($data['race']=="white")
                        {
                        ?>
                        <label for="race1"> </label>
                        <input type="radio" name="race" id="race1" value="white" checked="checked"> white
                        <?php 
                        }else{
                        ?>
                        <input type="radio" name="race" id="race1" value="white"> white
                        <?php }?>
                    </li>
                    <li>
                        <?php 
                        if($data['race']=="Yellow")
                        {
                        ?>
                        <label for="race2"> </label>
                        <input type="radio" name="race" id="race2" value="Yellow" checked="checked"> Yellow
                        <?php 
                        }else{
                        ?>
                        <input type="radio" name="race" id="race2" value="Yellow"> Yellow
                        <?php }?>
                        
                    </li>
                    <li>
                        <?php 
                        if($data['race']=="green")
                        {
                        ?>
                         <label for="race3"></label>
                         <input type="radio" name="race" id="race3" value="green" checked="checked"> green
                        <?php 
                        }else{
                        ?>
                        <input type="radio" name="race" id="race3" value="green"> green
                        <?php }?>
                        
                    </li>
                    <li>
                        <?php 
                        if($data['race']=="red")
                        {
                        ?>
                         <label for="race4"> </label>
                         <input type="radio" name="race" id="race4" value="red" checked="checked"> red
                        <?php 
                        }else{
                        ?>
                        <input type="radio" name="race" id="race4" value="red"> red
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