<?php
include_once('lib/application.php');
//debug($_GET['id']);
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
            <form action="store.php" method="post">
                <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
                       <fieldset>
                    <legend>Section1</legend>
                    <ul>
                        <li>
                            <label for="firstname">Enter Your Email</label>
                            <input  type="text" name="firstname" id="firstname" autofocus="autofocus" placeholder="ex.arif" value="<?php
if (array_key_exists('firstname', $data) && !empty($data['firstname'])) {
    echo $data['firstname'];
} else {
    echo "";
}
?> ">
                        </li>
                        <li>
                            <label for="lastname">Enter Your Last-Name</label>
                            <input  type="text" name="lastname" id="lastname"  placeholder="ex. Hossain" value=" <?php
                            if (array_key_exists('lastname', $data) && !empty($data['lastname'])) {
                                echo $data['lastname'];
                            } else {
                                echo "";
                            }
?>">
                        </li>


                        <li>
                            <label for="mname">Enter Your Last-Name</label>
                            <input  type="text" name="mname" id="mname"  placeholder="ex. Hossain" value=" <?php
                                    if (array_key_exists('mname', $data) && !empty($data['mname'])) {
                                        echo $data['mname'];
                                    } else {
                                        echo "";
                                    }
                                    ?>">
                        </li>

                        <li>
                            <label for="dob">Enter Date of Birth</label>
                            <input  type="text" name="dob" id="dob"  placeholder="ex. Hossain" value=" <?php
                            if (array_key_exists('dob', $data) && !empty($data['dob'])) {
                                echo $data['dob'];
                            } else {
                                echo "";
                            }
                            ?>">
                        </li>

                        <li>
                            <label for="gender">Your Gender</label>
                            <select name="gender"  id="gender" >
                                <option value="M">Male</option>
                                <option value="F">Female</option>
                            </select>
                        </li>
                        
                         <li>
                            <label for="ssn">Enter Your S.S.N</label>
                            <input  type="text" name="ssn" id="ssn"  placeholder="" value=" <?php
                                    if (array_key_exists('ssn', $data) && !empty($data['ssn'])) {
                                        echo $data['ssn'];
                                    } else {
                                        echo "";
                                    }
                                    ?>">
                        </li>
                        
                        <li>
                            <label for="facilityname">Enter Your Facility Name</label>
                            <input  type="text" name="facilityname" id="facilityname"  placeholder="" value=" <?php
                                    if (array_key_exists('facilityname', $data) && !empty($data['facilityname'])) {
                                        echo $data['facilityname'];
                                    } else {
                                        echo "";
                                    }
                                    ?>">
                        </li>


                    </ul>
                </fieldset>
                 <h3> Decedent of Hispanic Origin</h3></br>
            <hr>
            <fieldset>
                <legend>Section2</legend>
                <ul>
                    <li>
                        <label for="origin1"> No, NOt Spanish</label>
                 <input type="radio" name="origin" id="origin1" value="No, NOt Spanish" checked="checked"> No, NOt Spanish
                    </li>
                    <li>
                        <label for="origin2"> Yes, Spanish</label>
                <input type="radio" name="origin" id="origin2" value="Yes, Spanish"> Yes, Spanish
                    </li>
                    <li>
                         <label for="origin3"> No, English</label>
                <input type="radio" name="origin" id="origin3" value="No, English" > No, English
                    </li>
                    <li>
                         <label for="origin4"> No, NOt Spanish</label>
                <input type="radio" name="origin" id="origin4" value="No, NOt Spanish"> No, NOt Spanish
                    </li>
                    <li>
                         <label for="origin5"> Yes, Spanish</label>
                <input type="radio" name="origin" id="origin5" value="Yes, Spanish" > Yes, Spanish
                    </li>
                    <li>
                         <label for="origin6"> No, Not Englishs</label>
                <input type="radio" name="origin" id="origin6" value="No, Not Englishs"> No, Not Englishs
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
