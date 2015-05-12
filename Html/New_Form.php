<!DOCTYPE html>
<html>

<body>
<h1>Death Certificate</h1>
<p>The elements defines the options to select. The list will normally show the first item as selected. You can add a selected attribute to define a predefined option.</p>
<h3>Death Reporting For Vital Records</h3>
<form action="DisplayForm.php" method="post">
<section>
<fieldset>
    <legend>
        <h4>Decedents Name</h4></legend>
    <label for="fname">First Name</label>
    <br/>
    <input type="text" id="fname" name="fname">
    <br/>
    <label for="lname">Last Name</label>
    <br/>
    <input type="text" id="lname" name="lname">
    <br/>
    <label for="mname">Middle Name</label>
    <br/>
    <input type="text" id="mname" name="mname">
    <br/>
    <label for="dob">Date Of Birth</label>
    <br/>
    <input type="text" id="dob" name="dob">
    <br/>
    <label for="gender">Gender</label>
    <br/>
    <select name="gender">
        <option value="M">Male</option>
        <option value="F">Female</option>
    </select>
    <br/>
    <label for="ssn">Social Secuirity Number</label>
    <br/>
    <input type="text" id="ssn" name="ssn">
    <br/>
    <label for="facilityname">Facility Name</label>
    <br/>
    <input type="text" id="facilityname" name="facilityname">
    <br/>
</fieldset>
<br/>
<h3> Decedent Of Hispanic Origin</h3>
<hr>
<fieldset>
    <legend>
        <h4>Check The Box That best Describe</h4></legend>
    <label for="box"></label>
    <input type="radio" name="box" value="Not Spanish" checked>No,Not Spanish
    <input type="radio" name="box" value="Mexican">Yes, Mexican
    <input type="radio" name="box" value="Spanish">No,Not Spanish
    <input type="radio" name="box" value="Not Spanish">No,Not Spanish
    <br/>
    <input type="radio" name="box" value="Other">Yes,Other
    <input type="text">
    <br/>
</fieldset>
<br/>
<h3> Decedents Race</h3>
<hr>
<fieldset>
    <legend>Decedents radio buttn area</legend>
    <label for="race">
        <h4>Click One or More to indicate</h4></label>
    <input type="radio" name="race" value="White" checked="checked">white
    <br/>
    <input type="radio" name="race" value="Black or African">Black or African
    <br/>
    <input type="radio" name="race" value="American or Indian">American or Indian
    <br/>
    <input type="text" name="en">
    <br/>
    <input type="radio" name="race" value="Korean">Korean
    <br/>
    <input type="radio" name="race" value="Asian Indian">Asian Indian
</fieldset>
<br/>
<h3>Item Must Be Complete</h3>
<hr>
<fieldset>
    <legend>
        <h4>Pronounce or certifies date area</h4></legend>
    <label for="dpd">Date pronunce date</label>
    <br/>
    <input type="text" id="dpd" name="dpd">
    <br/>
    <label for="tpd">Time pronunce date</label>
    <br/>
    <input type="text" id="tpd" name="tpd">
    <br/>
    <label for="signature">Signature of person</label>
    <br/>
    <input type="text" id="signature" name="signature">
    <br/>
    <label for="licence">Licence Number</label>
    <br/>
    <input type="text" id="licence" name="licence">
    <br/>
    <label for="gender">Gender</label>
    <br/>
    <label for="signed">Date Signed</label>
    <br/>
    <input type="text" id="signed" name="signed">
    <br/>
    <label for="actual">Actual Date of Birth</label>
    <br/>
    <input type="text" id="actual" name="actual">
    <br/>
</fieldset>
<h3>Cause Of Death</h3>
<hr>
<p><strong>PART I:</strong>The elements defines the options to select. The list will normally show the first item as selected. You can add a selected attribute to define a predefined option.</p>
<fieldset>
    <legend>
        <h4>Cause Of date area</h4></legend>
    <label for="imc">Immediate Cause</label>
    <br/>
    <input type="text" id="imc" name="imc">
    <br/>
    <label for="slc">Sequentially List Conditions</label>
    <br/>
    <input type="text" id="slc" name="slc">
    <br/>
    <label for="uncause">Enter The Underling Cause</label>
    <br/>
    <input type="text" id="uncause" name="uncause">
    <br/>
    <label for="last">Last</label>
    <br/>
    <input type="text" id="last" name="last">
    <br/>
    <label for="due">Due To</label>
    <br/>
    <input type="text" id="due" name="due">
    <br/>
    <label for="dut">Due to</label>
    <br/>
    <input type="text" id="dut" name="dut">
    <br/>
</fieldset>
<br/>
<fieldset>
    <label for="others"><strong>Partii.</strong>Enter Other Significant info</label>
    <textarea name="others" rows="5" cols="170"></textarea>
    <br/>
    <br/>
</fieldset>
<br/>
<fieldset>
    <label for="autospy">was an autospy perform</label>
    <input type="radio" name="autospy" value="Yes" checked>Yes
    <input type="radio" name="autospy" value="No">No
    <label for="autospy2">Were an autospy finding available</label>
    <input type="radio" name="autospy2" value="Yes" checked>Yes
    <input type="radio" name="autospy2" value="No">No
</fieldset>
<h4>if Female:</h4>
<hr>
<fieldset>
    <label for="preg">If Female</label>
    <br/>
    <input type="radio" name="preg" value="Not Pregment pas Year" checked>Not Pregment Pas Year
    <input type="radio" name="preg" value="Pregment Pas Year">Pregment Pas Year
    <input type="radio" name="preg" value="nknown Pregment Pas Year">Unknown Pregment Pas Year
</fieldset>
<h4>Manner Of Death:</h4>
<hr>
<fieldset>
    <label for="manner">Manner Of Death</label>
    <br/>
    <input type="radio" name="manner" value="Natural" checked>Natural
    <input type="radio" name="manner" value="Homicides">Homicides
    <input type="radio" name="manner" value="Suicide">Suicide
</fieldset>
<h4>injury:</h4>
<hr>
<fieldset>
    <label for="doi">Date Of Injury</label>
    <input type="text" name="doi">
    <label for="toi">Time Of Injury</label>
    <input type="text" name="toi">
    <label for="poi">Place Of Injury</label>
    <input type="text" name="poi">
    <label for="iaw">Injury at work</label>
    <input type="radio" name="iaw" value="Yes" checked>yes
    <input type="radio" name="iaw" value="Yes">no
</fieldset>
<h4>Location Of Injury:</h4>
<hr>
<fieldset>
    <label for="state">State</label>
    <input type="text" name="state">
    <label for="city">City</label>
    <input type="text" name="city">
    <label for="street">Street Number</label>
    <input type="text" name="street">
</fieldset>
<br/>
<br/>
<fieldset>
    <label for="injuryocc">
        <h4>Described How Injury Occured</h4></label>
    <textarea name="injuryocc" rows="5" cols="170"></textarea>
    <br/>
    <br/>
</fieldset>
<h4>Certifier</h4>
<hr>
<fieldset>
    <legend>certifier</legend>
    <label for="coo">Check Only One</label>
    <input type="radio" name="coo" value="Certifying Physician" checked>Certifying Physician, To best of my knowledge
    <input type="radio" name="coo" value="Pronouncing and Certifying Physician">Pronounce Certifying Physician, To best of my knowledge
    <input type="radio" name="coo" value="Medical Examiner">Medical examinar To best of my knowledge
</fieldset>
<br/>
<fieldset>
    <label for="sigc">Signature Of Certifier</label>
    <input type="text" name="sigc">
</fieldset>
<h4>Person Completing Cause Of Death</h4>
<hr>
<br/>
<fieldset>
    <label for="name">Name</label>
    <input type="text" name="name">
    <label for="address">Address</label>
    <input type="text" name="address">
    <label for="zipcode">Zipcode</label>
    <input type="text" name="zipcode">
</fieldset>
<br/>
<hr>
<br/>
<fieldset>
    <input type="submit" name="submit" value="Submit">
</fieldset>
</section>
</form>
</body>
</html>