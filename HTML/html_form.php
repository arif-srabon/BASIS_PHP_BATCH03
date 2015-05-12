
<!DOCTYPE html>
<html>
<body>
    <h1>Death Certificate</h1>
    <p>The elements defines the options to select.
The list will normally show the first item as selected.
You can add a selected attribute to define a predefined option.</p>
    <h3>Death Reporting For Vital Records</h3>
    <h4>Decedents Name</h4>
    <form>
        First Name<br/>
        <input type="text" name="firstname"><br/>
        Last Name<br/><input type="text" name="lastname"><br/>
        Middle Name<br/><input type="text" name="mname"><br/>
        Date Of Birth<br/><input type="text" name="dob"><br/>
        Gender<br/>
        <select>
            <option value="">Male</option>
             <option value="">Female</option>
        </select>
        <br/>
        Social Secuirity Number<br/><input type="text" name="ssn"><br/>
        Facility Name<br/><input type="text" name="dob"><br/>
    </form>
    <br/><h3> Decedent Of Hispanic Origin</h3><hr>
   <h4>Check The Box That best Describe</h4>
   <form>
       <input type="radio" name="box" value="Male" checked="checked">No,Not Spanish
       <input type="radio" name="box" value="Female">Yes, Mexican
       <input type="radio" name="box" value="Male" checked="checked">No,Not Spanish
       <input type="radio" name="box" value="Male" checked="checked">No,Not Spanish<br/>
       <input type="radio" name="box" value="Male" checked="checked">No,Not Spanish
       <br/>
   </form>
    <br/><h3> Decedents Race</h3><hr>
   <h4>Click One or More to indicate</h4>
   <form>
       <table>
           <tr>
               <td> <input type="radio" name="box" value="Male" checked="checked">white</td>
               <td> <input type="radio" name="box" value="Male" checked="checked">Flippo</td>
               <td> <input type="radio" name="box" value="Male" checked="checked">native</td>
           </tr>
           <tr>
               <td> <input type="radio" name="box" value="Male" checked="checked">white</td>
               <td> <input type="radio" name="box" value="Male" checked="checked">Flippo</td>
               <td> <input type="radio" name="box" value="Male" checked="checked">native</td>
           </tr>
           <tr>
               <td> <input type="radio" name="box" value="Male" checked="checked">white<br/>
                   <input type="text" name="en">
               </td>
               <td> <input type="radio" name="box" value="Male" checked="checked">Flippo</td>
               <td> <input type="radio" name="box" value="Male" checked="checked">native</td>
           </tr>
           <tr>
               <td> <input type="radio" name="box" value="Male" checked="checked">white</td>
               <td> <input type="radio" name="box" value="Male" checked="checked">Flippo</td>
               <td> <input type="radio" name="box" value="Male" checked="checked">native<br/>
               <input type="text" name="sd">
               </td>
           </tr>
           <tr>
               <td> <input type="radio" name="box" value="Male" checked="checked">white</td>
               <td> <input type="radio" name="box" value="Male" checked="checked">Flippo<br/>
                   <input type="text" name="sd">
               </td>
               <td> <input type="radio" name="box" value="Male" checked="checked">native<br/>
                <input type="text" name="sd">
               </td>
           </tr>
       </table>
       <br/>
   </form>
   <h3>Item Must Be Complete</h3><hr>
   <form>
       <table>
           <tr>
               <td> Date Pronounce date<br/>
        <input type="text" name="firstname"><br/></td>
               <td> Date Pronounce date<br/>
        <input type="text" name="firstname"><br/></td>
               <td> Date Pronounce date<br/>
        <input type="text" name="firstname"><br/></td>
           </tr>
           <tr>
               <td> Date Pronounce date<br/>
        <input type="text" name="firstname"><br/></td>
               <td> Date Pronounce date<br/>
        <input type="text" name="firstname"><br/></td>
               <td> Date Pronounce date<br/>
        <input type="text" name="firstname"><br/></td>
           </tr>
           <tr>
               <td> Date Pronounce date<br/>
        <input type="text" name="firstname"><br/></td>
               <td>  Was Medical Examinar<br/>
                   <input type="radio" name="rd"><input type="radio" name="rd"></td>
           </tr>
       </table>
    </form>
     <h3>Cause Of Death</h3><hr>
      <p>The elements defines the options to select.
The list will normally show the first item as selected.
You can add a selected attribute to define a predefined option.</p>
   <form>
       <table>
           <tr>
               <td> Date Pronounce date<br/>
        <input type="text" name="firstname"><br/></td>
               <td> Date Pronounce date<br/>
        <input type="text" name="firstname"><br/></td>
               <td> On set of death<br/>
        <input type="text" name="firstname"><br/></td>
           </tr>
           <tr>
               <td> Date Pronounce date<br/>
        <input type="text" name="firstname"><br/></td>
               <td> Date Pronounce date<br/>
        <input type="text" name="firstname"><br/></td>
               <td> On set of death<br/>
        <input type="text" name="firstname"><br/></td>
           </tr>
            <tr>
               <td> Date Pronounce date<br/>
        <input type="text" name="firstname"><br/></td>
               <td> Date Pronounce date<br/>
        <input type="text" name="firstname"><br/></td>
               <td> On set of death<br/>
        <input type="text" name="firstname"><br/></td>
           </tr>
           <tr>
               <td colspan="2"> Date Pronounce date<br/>
        <input type="text" name="firstname"><br/></td>
               <td>On set of death<br/>
                   <input type="text" name="rd"></td>
           </tr>
       </table>
       <br/>
       <strong>Partii.</strong>Enter Other Significant info<br/>
       <textarea name="add" rows="5" cols="170"></textarea><br/><br/>
       <table>
           <tr>
           <td>was an autospy perform</td>
           <td>was an autospy perform</td>
           <td>was an autospy perform</td>
           </tr>
           <tr>
               <td><input type="radio" name="rd">Yes<input type="radio" name="rd">Yes</td>
               <td><input type="radio" name="rd">Yes<input type="radio" name="rd">Yes</td>
               <td><input type="radio" name="rd">Yes<input type="radio" name="rd">Probably</td>
           </tr>
           <tr>
               <td></td>
               <td></td>
               <td><input type="radio" name="rd">Yes<input type="radio" name="rd">Unknown</td>
           </tr>
       </table>
       <h4>if Female:</h4><hr>
        <table>
           <tr>
               <td><input type="radio" name="rd">Not Pregment Pas Year</td>
               <td><input type="radio" name="rd">Not Pregment Pas Year</td>
               <td><input type="radio" name="rd">Not Pregment Pas Year</td>
           </tr>
           <tr>
               <td colspan="2"><input type="radio" name="rd">Not Pregment, but pregment 43 years ago</td>
               <td><input type="radio" name="rd">Not Pregment Pas Year</td>
           </tr>
       </table>
       <h4>Manner Of Death:</h4><hr>
       <input type="radio" name="rd">Natural<input type="radio" name="rd">Natural
       <input type="radio" name="rd">Natural<input type="radio" name="rd">Not
       <input type="radio" name="rd">Natural<input type="radio" name="rd">Natural
       <h4>injury:</h4><hr>
       <table>
           <tr>
               <td> Date Of Injury<br>
       <input type="text" name="inj"></td>
               <td> Time Of Injury<br>
       <input type="text" name="inj"></td>
               <td> Place Of Injury<br>
       <input type="text" name="inj"></td>
               <td>Initially at work<br>
       <input type="radio" name="rd">yes<input type="radio" name="rd">no</td>
           </tr>
       </table>
        <h4>Location Of Injury:</h4><hr>
       <table>
           <tr>
               <td> Date Of Injury<br>
       <input type="text" name="inj"></td>
               <td> Time Of Injury<br>
       <input type="text" name="inj"></td>
               <td> Place Of Injury<br>
       <input type="text" name="inj"></td>
               <td>Initially at work<br>
       <input type="radio" name="rd">yes<input type="radio" name="rd">no</td>
           </tr>
       </table>
    </form>
</body>
</html>
