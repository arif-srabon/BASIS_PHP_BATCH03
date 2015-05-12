<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<<html>
    <head>
        <title>Death certificate</title>
    </head>
    <body>
        <h1>Death Certificate</h1>
        <h4>The elements defines the options to select. The list will normally show the first item as selected. You can add  a selected attributed to define a predefined option.</h4>
        <h3> Death Reporting For Vital Records</h3>
        <h5><b>Decedents Information:</b></h5>
        <form>
            First Name:</br>
            <input type="text" name="firstname"></br>
            Last Name:</br>
            <input type="text" name="lastname"></br>
            Middle Name:</br>
            <input type="text" name="middlename"></br>
             Date of Birth:</br>
            <input type="text" name="date"></br>
            Gender:</br>
            <select>
            <option value=""> Male </option></br>
            <option value=""> Male </option></br>
            </select>
            </br>
            Social Secutity Number:</br>
            <input type="text" name="ssc"></br>
            Facility Name:</br>
            <input type="text" name="facname"></br>
            <h3> Decedent of Hispanic Origin</h3></br>
            <hr>
            <h5> Check The Box That best Describe</h5></br>
            <form>
                <input type="radio" name="box" value="Male" checked="checked"> No, NOt Spanish
               <input type="radio" name="box" value="Male" checked="checked"> Yes, Spanish
               <input type="radio" name="box" value="Female" checkekd="checked"> No, English
               <input type="radio" name="box" value="Male" checked="checked"> No, NOt Spanish</br>
               <input type="radio" name="box" value="Male" checked="checked"> Yes, Spanish
               <input type="radio" name="box" value="Female" checkekd="checked"> No, Not Englishs
            </form
            <h3> Decedents Race</h3>
            <hr>
            <h4> Click One or More to indicate</h4>
            <form>
                <table>
                    <tr>
                        <td><input type="radio" name="box" value="" checked="checked">white</td>
                        <td><input type="radio" name="box" value="" checked="checked">white</td>
                        <td><input type="radio" name="box" value="" checked="checked">white</td>
                       
                        
                    </tr>
                    <tr>
                        <td><input type="radio" name="box" value="" checked="checked">white</td>
                        <td><input type="radio" name="box" value="" checked="checked">yellow</td>
                        <td><input type="radio" name="box" value="" checked="checked">Flippo</td>
                    </tr>
                    <tr>
                        <td><input type="radio" name="box" value="" checked="checked">white</td>
                        <td><input type="text" name="white" value=""></td>
                         <td><input type="text" name="white" value=""></td>
                       
                    </tr>
                    <tr>
                        <td><input type="radio" name="box" value="" checked="checked">white</td>
                        <td><input type="radio" name="box" value="" checked="checked">Flippo</td>
                        <td><input type="text"  name="box" value="" ></td>
                    </tr>
                    <tr>
                         <td><input type="text" name="white" value=""></td>
                        <td><input type="text"  name="box" value="" ></td>
                        <td><input type="text"  name="box" value="" ></td>
                        
                    </tr>
                </table>
                <hr>
            </form>
            <h3>Items Must be completed by Person who Pronounces or cerfifies Death.</
                </br><hr>
            
            <form>
                <table>
                    <tr>
                        <td>Date Pronounced Dead<br/>
                            <input type="text" name="dead" ></br>
                        </td>
                        <td>Time Pronounced Dead</br>
                            <input type="text" name="time"></br>
                        </td>
                    </tr>
                    <tr>
                        <td>License Number<br/>
                            <input type="text" name="dead" ></br>
                        </td>
                        <td>Date Sign</br>
                            <input type="text" name="time"></br>
                        </td>
                    </tr>
                    <tr>
                        <td>ACtual Or Presumed Time Of Death<br/>
                            <input type="text" name="dead" ></br>
                        </td>
                        <td>Was Medical Examiner Or Corner Control</br>
                            <input type="radio" name="box" value="yes">Yes<input type="radio" name="box" value="yes">NO
</br>
                        </td>
                    </tr>
                </table>
            </form>
                <h3>Cause of Death(See Instruction and examles)</h3><hr>
                <p><b>Part-1:</b> Enter the chain of events diseases, injuries or comlicants that directly caused the death. Do not enter terminal events such as cardic arrest, respiratory or ventricular fibrillation without showing the stiology. Do Not ABBREVIATE. Enter only one cause on a line.</p>
                <form>
                    <table>
                        <tr>
                            <td>a. Immediate Cause(Final disease or condition resulting in death)</br>
                                <input type="text" name="final" value="id">
                            </td>
                            <td>Due to(or as a consequence of):</br>
                                <input type="text" name="due" value="">
                            </td>
                            <td>onset to death<br><input type="text" name="onset" value=""></td>
                        </tr>
                        <tr>
                            <td>b. Immediate Cause(Final disease or condition resulting in death)</br>
                                <input type="text" name="final" value="id">
                            </td>
                            <td>Due to(or as a consequence of):</br>
                                <input type="text" name="due" value="">
                            </td>
                            <td>onset to death<br><input type="text" name="onset" value=""></td>
                        </tr>
                        <tr>
                            <td>c. Immediate Cause(Final disease or condition resulting in death)</br>
                                <input type="text" name="final" value="id">
                            </td>
                            <td>Due to(or as a consequence of):</br>
                                <input type="text" name="due" value="">
                            </td>
                            <td>onset to death<br><input type="text" name="onset" value=""></td>
                        </tr>
                        <tr>
                            <td>d. Immediate Cause(Final disease or condition resulting in death)</br>
                                <input type="text" name="final" value="id">
                            </td>
                            <td></td>
                            <td>onset to death<br><input type="text" name="onset" value=""></td>
                        </tr>
                    </table>
                    </br>
                </form>
                
        <p><strong>PART II:</strong> Enter other Significant Condition to death but not resulting in the undrlying given in PART 1</p>
                    <textarea name="arif" rows="5" cols="150" ></textarea><br/><br/>
                    <form>/>
                        <table>
                            <tr>
                                <td>Was An Autospy Perfortmed?</td>
                                <td>Was An Autospy Perfortmed?</td>
                                <td>Was An Autospy Perfortmed?</td>

                            </tr>
                            <tr>
                                <td><input type="radio" name="rd" >Yes<input type="radio" name="rd">No</td>
                                <td><input type="radio" name="rd" >Yes<input type="radio" name="rd">No</td>
                                <td><input type="radio" name="rd" >Yes<input type="radio" name="rd">No</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td><input type="radio" name="rd" >Yes<input type="radio" name="rd" >No</td>
                            </tr>
                        </table>
                        
                    </form>
                    <br/>
                    <h3>If Female</h3>
                    <hr>
                    <form>
                        <table>
                            <tr>
                                <td><input type="radio" name="box">Not Pregnant within past year</td>
                                <td><input type="radio" name="box">Pregnant at a time of Death</td>
                                <td><input type="radio" name="box">Not Pregnant, but pragnent within 42 days of Death</td>
                            </tr>
                             <tr>
                                <td><input type="radio" name="box">Not Pregnant, but pragnent 43 days to 1 years before Death</td>
                                <td></td>
                                <td><input type="radio" name="box">Pregnant at a time of Death</td>
                            </tr>
                        </table>
                    </form>
                    <br/>
                    <h3>Manner of Death:</h3><hr>
                    <form>
                        <table>
                            <tr>
                                <td><input type="radio" name="box">Natural</td>
                                <td><input type="radio" name="box">Natural</td>
                                <td><input type="radio" name="box">Natural</td>
                                <td><input type="radio" name="box">Accident</td>
                                <td><input type="radio" name="box">Natural</td>
                                <td><input type="radio" name="box">Suicied</td>
                            </tr>
                        </table>
                    </form>
                    <h3>Injury</h3><hr>
                    <form>
                        <table>
                            <tr>
                                <td>Date of Injury<br/><input type="text" name="inj"></td>
                                <td>time of Injury<br/><input type="text" name="inj"></td>
                                <td>Places of Injury<br/><input type="text" name="inj"></td>
                                <td>Injury At work?<br/><input type="radio" name="box">yes<input type="radio" name="box">No</td>
                            </tr>
                        </table>
                    </form>
                    <br/>
                    <h3>LOcation of injury</h3>
                    <hr>
                    <form>
                        <table>
                            <tr>
                                <td>State</br><input type="text" name="state" ></td>
                                <td>City of TOwn</br><input type="text" name="state" ></td>
                            </tr>
                            <tr>
                                <td>State Number:</br><input type="text" name="state" ></td>
                                <td>Appartment No:</br><input type="text" name="state" ></td>
                                <td>Zip code:</br><input type="text" name="state" ></td>
                            </tr>
                        </table>
                    </form>
                    <h3>Describe How Injury Occured:</h3>
                    <br/><hr>
                    <textarea input="text" rows="5" cols="150"></textarea>
                    <h3>If Transportation Injury</h3>
                    <br/><hr>
                    <form>
                        <table>
                            <tr>
                                <td><input type="radio" name="box">Driver/Operator<input type="radio" name="box">Passenger<input type="radio" name="box">President<input type="radio" name="box">Other(specify)<input type="text" name="text"></td>
                            </tr>
                        </table>
                    </form>
                    <h3>Certtifier</h3>
                    <hr>
                    <form>
                       <input type="radio" name="box">Certifite Physician-To the best of my knowledge, death occured due to the cause(s) and madder stated.
                       <br/>
                       <input type="radio" name="box">Pronouncing and certifying Physician-To the best of my knomledge, death occured at the time,date and place, and due to the cause(s) and manner stated.
                       <br/>
                       <input type="radio" name="box">Medical Examiner or Corner-On the basis of examination, and/or investigation, in my opinion,death occured at the time, date and place, and due to the cases and manner stated.<br/>
                       <br/>
                       <h3>Signature of Certiffier</h3>
                       <textarea input="text" rows="2" cols="50"></textarea>
                    </form>
                    <h3>Person Completing Cause of Death</h3>
                    <hr>
                    <form>
                        <table>
                        <tr>
                            <td>Name<br/><input type="text" name="name"></td>
                            <td>Adderss<br/><input type="text" name="name"></td>
                            <td>Zip code:<br/><input type="text" name="name"></td>
                        </tr>
                        <hr>
                        <tr>
                            <td>Title of Certifier<br/><input type="text" name="name"></td>
                            <td>License Number<br/><input type="text" name="name"></td>
                            <td>Date Certified:<br/><input type="text" name="name"></td>
                        </tr>
                        </table>
                        <hr>
                        
                    </form>
        </form>
        arifulislamsrabob70@gmail.com<br/>
        Date-12/5/2015
    </body>
