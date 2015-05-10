<?php
if(isset($_POST) && !empty($_POST))
{
?>
<!DOCTYPE html>
<html>
<body>
<h1>Death Certificate</h1>
<p>The elements defines the options to select. The list will normally show the first item as selected. You can add a selected attribute to define a predefined option.</p>
<h3>Death Reporting For Vital Records</h3>
<section>
<fieldset>
    <legend>
        <h4>Decedents Name</h4></legend>
    <label for="fname">First Name:</label>
    <br/>
    <?php
       echo $_POST['fname'];
    ?>
    <br/>
    <label for="lname">Last Name:</label>
    <br/>
    <?php
    echo $_POST['lname'];
    ?>
    <br/>
    <label for="mname">Middle Name:</label>
    <br/>
    <?php
    echo $_POST['mname'];
    ?>
    <br/>
    <label for="dob">Date Of Birth:</label>
    <br/>
    <?php
    echo $_POST['dob'];
    ?>
    <br/>
    <label for="gender">Gender:</label>
    <br/>
    <?php
    echo $_POST['gender'];
    ?>
    <br/>
    <label for="ssn">Social Secuirity Number:</label>
    <br/>
    <?php
    echo $_POST['ssn'];
    ?>
    <br/>
    <label for="facilityname">Facility Name:</label>
    <br/>
    <?php
    echo $_POST['facilityname'];
    ?>
    <br/>
</fieldset>
<br/>
<h3> Decedent Of Hispanic Origin</h3>
<hr>
<fieldset>
    <legend>
        <h4>Check The Box That best Describe</h4></legend>
    <label for="box"></label>
    <?php
    echo $_POST['box'];
    ?>
    <br/>
</fieldset>
<br/>
<h3> Decedents Race</h3>
<hr>
<fieldset>
    <legend>Decedents radio buttn area</legend>
    <label for="race">
        <h4>Click One or More to indicate:</h4></label>
    <?php
    echo $_POST['race'];
    ?>
</fieldset>
<br/>
<h3>Item Must Be Complete</h3>
<hr>
<fieldset>
    <legend>
        <h4>Pronounce or certifies date area</h4></legend>
    <label for="dpd">Date pronunce date:</label>
    <br/>
    <?php
    echo $_POST['dpd'];
    ?>
    <br/>
    <label for="tpd">Time pronunce date:</label>
    <br/>
    <?php
    echo $_POST['tpd'];
    ?>
    <br/>
    <label for="signature">Signature of person:</label>
    <br/>
    <?php
    echo $_POST['signature'];
    ?>
    <br/>
    <label for="licence">Licence Number:</label>
    <br/>
    <?php
    echo $_POST['licence'];
    ?>
    <br/>
    <label for="signed">Date Signed:</label>
    <br/>
    <?php
    echo $_POST['signed'];
    ?>
    <br/>
    <label for="actual">Actual Date of Birth:</label>
    <br/>
    <?php
    echo $_POST['actual'];
    ?>
    <br/>
</fieldset>
<h3>Cause Of Death</h3>
<hr>
<p><strong>PART I:</strong>The elements defines the options to select. The list will normally show the first item as selected. You can add a selected attribute to define a predefined option.</p>
<fieldset>
    <legend>
        <h4>Cause Of date area</h4></legend>
    <label for="imc">Immediate Cause:</label>
    <br/>
    <?php
    echo $_POST['imc'];
    ?>
    <br/>
    <label for="slc">Sequentially List Conditions:</label>
    <br/>
    <?php
    echo $_POST['slc'];
    ?>
    <br/>
    <label for="uncause">Enter The Underling Cause:</label>
    <br/>
    <?php
    echo $_POST['uncause'];
    ?>
    <br/>
    <label for="last">Last</label>
    <br/>
    <?php
    echo $_POST['last'];
    ?>
    <br/>
    <label for="due">Due To</label>
    <br/>
    <?php
    echo $_POST['due'];
    ?>
    <br/>
    <label for="dut">Due to</label>
    <br/>
    <?php
    echo $_POST['dut'];
    ?>
    <br/>
</fieldset>
<br/>
<fieldset>
    <label for="others"><strong>Partii.</strong>Enter Other Significant info</label>
    <?php
    echo $_POST['others'];
    ?>
    <br/>
    <br/>
</fieldset>
<br/>
<fieldset>
    <label for="autospy">was an autospy perform:</label>
    <?php
    echo $_POST['autospy'];
    ?>
    <label for="autospy2">Were an autospy finding available:</label>
    <?php
    echo $_POST['autospy2'];
    ?>
</fieldset>
<h4>if Female:</h4>
<hr>
<fieldset>
    <label for="preg">If Female:</label>
    <br/>
    <?php
    echo $_POST['preg'];
    ?>
</fieldset>
<h4>Manner Of Death:</h4>
<hr>
<fieldset>
    <label for="manner">Manner Of Death:</label>
    <br/>
    <?php
    echo $_POST['manner'];
    ?>
</fieldset>
<h4>injury:</h4>
<hr>
<fieldset>
    <label for="doi">Date Of Injury:</label>
    <?php
    echo $_POST['doi'];
    ?>
    <label for="toi">Time Of Injury:</label>
    <?php
    echo $_POST['toi'];
    ?>
    <label for="poi">Place Of Injury:</label>
    <?php
    echo $_POST['poi'];
    ?>
    <label for="iaw">Injury at work:</label>
    <?php
    echo $_POST['iaw'];
    ?>
</fieldset>
<h4>Location Of Injury:</h4>
<hr>
<fieldset>
    <label for="state">State:</label>
    <?php
    echo $_POST['state'];
    ?>
    <label for="city">City:</label>
    <?php
    echo $_POST['city'];
    ?>
    <label for="street">Street Number:</label>
    <?php
    echo $_POST['street'];
    ?>
</fieldset>
<br/>
<br/>
<fieldset>
    <label for="injuryocc">
        <h4>Described How Injury Occured:</h4></label>
    <?php
    echo $_POST['injuryocc'];
    ?>
    <br/>
    <br/>
</fieldset>
<h4>Certifier</h4>
<hr>
<fieldset>
    <legend>certifier</legend>
    <label for="coo">Check Only One:</label>
    <?php
    echo $_POST['coo'];
    ?>
</fieldset>
<br/>
<fieldset>
    <label for="sigc">Signature Of Certifier:</label>
    <?php
    echo $_POST['sigc'];
    ?>
</fieldset>
<h4>Person Completing Cause Of Death</h4>
<hr>
<br/>
<fieldset>
    <label for="name">Name:</label>
    <?php
    echo $_POST['name'];
    ?>
    <label for="address">Address:</label>
    <?php
    echo $_POST['address'];
    ?>
    <label for="zipcode">Zipcode:</label>
    <?php
    echo $_POST['zipcode'];
    ?>
</fieldset>
<br/>
<hr>
<br/>
</section>
</body>
</html>
<?php }
else
{
    echo "Not Defined";
}
?>