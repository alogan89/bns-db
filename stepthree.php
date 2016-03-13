<?php
//to-do: CHECK TO MAKE SURE THERE IS A CHARACTER BEING EDITED. IF NOT, HEADER() BACK TO INDEX

$char_name = "CHARACTER NAME WILL GO HERE";
//to-do: LOAD CHARACTER NAME INTO THIS VARIABLE

if (isset($_POST["bloodline"])){
$bloodline = trim(htmlspecialchars($_POST["bloodline"])); //ADDS BLOODLINE
} else {
$bloodline = "parent_clan"; //SETS BLOODLINE TO PARENT CLAN IF NO BLOODLINE EXISTS
}
//to-do: ADD BLOODLINE TO CHARACTER, ADD APPROPRIATE MERIT TO CHARACTER IF APPLICABLE

?>

<?php include("inc/header.php"); ?>

<h1><?php echo "Creating ".$title_name; ?></h1>

<pre>
  Bloodline set to <?php echo $bloodline; ?>
</pre>

<!-- THE FORM BELOW CAN DEFINITELY BE IMPROVED WITH THE USE OF JAVASCRIPT. MY IDEA IS A SERIES OF CHECKBOXES, WHERE THE USER SETS THEIR PRIMARY ATTRIBUTE AND THEN IN THE NEXT SECTION (WHERE THEY SET THEIR SECONDARY) THAT OTPION IS NO LONGER AVAILABLE, ETC. -->
<form action="/stepfour.php/" method="post">
  <label for="attributes"><h3>Assign Attributes</h3></label>

  <p>Assign your Primary, Secondary, and Tertiary Attributes</p>
<table>
<tr>
<th>
  <select name="attributes" id="attributes" required>
    <option value="">Select one</option>
    <optgroup label="Physical Primary">
      <option value="psm">Social Secondary, Mental Tertiary</option>
      <option value="pms">Mental Secondary, Socal Tertiary</option>
    </optgroup>
    <optgroup label="Social Primary">
      <option value="spm">Physical Secondary, Mental Tertiary</option>
      <option value="smp">Mental Secondary, Physical Tertiary</option>
    </optgroup>
    <optgroup label="Mental Primary">
      <option value="mps">Physical Secondary, Social Tertiary</option>
      <option value="msp">Mental Secondary, Social Tertiary</option>
    </optgroup>
  </select>
</th>
</tr>
</table>
  
  <p>Assign your Attribute focuses</p>
<!-- I'D LIKE TO MOVE THESE UP. THE PLAYER CAN CHOOSE THEIR FOCUS RIGHT AFTER THEY CHOOSE THEIR ATTRIBUTE. ONCE AN OPTION IS CHECKED THE NEXT OPTIONS APPEAR, PROBABLY CHECKBOXES AS WELL, WITH THE APPROPRIATE ATTRIBUTES. IF THE PLAYER CHANGES THEIR FOCUS IT GETS WIPED AND RE-SET -->
<table>
<tr>
  <th>
    <label for "physical"><h4>Physical Attribute</h4></label>
  </th>
<td>
  <select name="physical" id="physical" required>
    <option value="">Select one</option>
    <option value="strength">Strength</option>
    <option value="dexterity">Dexterity</option>
    <option value="stamina">Stamina</option>
  </select>
</td>
</tr>
  
<tr>
  <th>
    <label for "social"><h4>Social Attribute</h4></label>
  </th>
<td>
  <select name="social" id="social" required>
    <option value="">Select one</option>
    <option value="charisma">Charisma</option>
    <option value="manipulation">Manipulation</option>
    <option value="appearance">Appearance</option>
  </select>
</td>
</tr>
  
<tr>
  <th>
    <label for "mental"><h4>Mental Attribute</h4></label>
  </th>
<td>
  <select name="mental" id="mental" required>
    <option value="">Select one</option>
    <option value="perception">Perception</option>
    <option value="intelligence">Intelligence</option>
    <option value="wits">Wits</option>
  </select>
</td>
</tr>
 </table>

  <input type="submit" value="Next step&#8230;">
</form>

<?php include("inc/footer.php"); ?>