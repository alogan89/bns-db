<?php 

if ($_SERVER["REQUEST_METHOD"] == "POST"){ //CHECK TO SEE IF A FORM HAS BEEN SUBMITTED
  
  $char_name = trim(htmlspecialchars($_POST["char_name"])); //set appropriate variables based on form data
  $archetype = trim(htmlspecialchars($_POST["archetype"]));
  $clan = trim(htmlspecialchars($_POST["clan"]));
  $setting = trim(htmlspecialchars($_POST["setting"]));
  $sect = trim(htmlspecialchars($_POST["sect"]));
  
  if ($_POST["title"] == ""){ //if no title was entered
    $title = "none"; //set variable to "none"
  } else { //otherwise...
  $title = trim(htmlspecialchars($_POST["title"])); //set title variable based on form data
  }
  
  //DO WE WANT TO MAKE EVERYTHING LOWERCASE? THE ONLY THINGS COMING IN WITH CAPITAL LETTERS WILL BE NAMES AND TITLES, SO I DON'T KNOW IF IT WILL MATTER
  
  //to-do: CREATE CHARACTER, ADD NAME, ADD ARCHETYPE, ADD CLAN, ADD SETTING, ADD SECT, ADD TITLE
  //to-do: SET IN-CLAN DISCIPLINES IN DB
  //to-do: AUTOMATICALLY ADD UNCOMMON CLAN/RARE CLAN MERIT TO CHARACTER BASED ON "SETTING" AND/OR "SECT"
  //to-do: SET AVAILABLE MERITS BASED ON CLAN AND SETTING/SECT
  
} else { // IF NO FORM HAS BEEN SUBMITTED
  
  header("location:index.php"); //RE-DIRECT BACK TO FIRST PAGE
  
} //IF THE REQUEST METHOD WAS $_POST (AND WE HAVEN'T BEEN SENT BACK TO THE START), WE CONTINUE…

?>
<?php include("inc/header.php"); ?>

 <pre> <!-- JUST CHECKING TO MAKE SURE THE FORM DATA IS COMING THROUGH. THE PRE BLOCKS WON'T BE ON THE FINAL PRODUCT. HOPEFULLY THIS WILL ALL BE PART OF THE FIRST STEP, ALLOWING THE PLAYER TO CHOOSE A BLOODLINE IMMEDIATELY AFTER CHOOSING THEIR CLAN, AND WE WILL JUST SKIP TO ATTRIBUTES -->
  Character name: <?php echo $char_name?>.
  Archetype set to <?php echo $archetype; ?>.
  Clan set to <?php echo $clan; ?>.
  Setting set to <?php echo $setting; ?>.
  Sect set to <?php echo $sect; ?>.
  Title set to <?php echo $title; ?>.
</pre>
<p>Choose your character's bloodline, if applicable.</p>

<?php if($clan == "assamite"){ ?> <!-- SEVERAL SIMILAR BLOCKS FOLLOW. THE PLAYER WILL ONLY SEE THE BLOCK APPROPRIATE TO THEIR CLAN -->

<form action="/stepthree.php/" method="post">
<table>
	<tr>
	<th>
  <label for="bloodline"><h3>Bloodline</h3></label>
  </th>
  <td>
  <select name="bloodline" id="bloodline" required>
    <option value="">Select Bloodline</option>
    <option value="parent_clan">Parent Clan</option>
		<option value="sorcerer">Sorcerer</option>
    <option value="vizier">Vizier</option>
  </select>
  </td>
  </tr>
 </table>
  <input type="submit" value="Next step&#8230;">
</form>

<?php } elseif($clan == "brujah") { ?>

<form action="/stepthree.php/" method="post">
<table>
	<tr>
	<th>
  <label for="bloodline"><h3>Bloodline</h3></label>
  </th>
  <td>
  <select name="bloodline" id="bloodline" required>
    <option value="">Select Bloodline</option>
    <option value="parent_clan">Parent Clan</option>
		<option value="true_brujah">True Brujah</option>
  </select>
  </td>
  </tr>
 </table>
  <input type="submit" value="Next step&#8230;">
</form>

<?php } elseif($clan == "followers_of_set") { ?>

<form action="/stepthree.php/" method="post">
<table>
	<tr>
	<th>
  <label for="bloodline"><h3>Bloodline</h3></label>
  </th>
  <td>
  <select name="bloodline" id="bloodline" required>
    <option value="">Select Bloodline</option>
    <option value="parent_clan">Parent Clan</option>
		<option value="tlacique">Tlacique</option>
		<option value="vipers">Vipers</option>
  </select>
  </td>
  </tr>
 </table>
  <input type="submit" value="Next step&#8230;">
</form>

<?php } elseif($clan == "gangrel") { ?>

<form action="/stepthree.php/" method="post">
<table>
	<tr>
	<th>
  <label for="bloodline"><h3>Bloodline</h3></label>
  </th>
  <td>
  <select name="bloodline" id="bloodline" required>
    <option value="">Select Bloodline</option>
    <option value="parent_clan">Parent Clan</option>
		<option value="ahrimanes">Ahrimanes</option>
    <option value="coyote">Coyote</option>
		<option value="noiad">Noiad</option>
  </select>
  </td>
  </tr>
 </table>
  <input type="submit" value="Next step&#8230;">
</form>

<?php } elseif($clan == "giovanni") { ?>

<form action="/stepthree.php/" method="post">
<table>
	<tr>
	<th>
  <label for="bloodline"><h3>Bloodline</h3></label>
  </th>
  <td>
  <select name="bloodline" id="bloodline" required>
    <option value="">Select Bloodline</option>
    <option value="parent_clan">Parent Clan</option>
		<option value="premascine">Premascine</option>
  </select>
  </td>
  </tr>
 </table>
  <input type="submit" value="Next step&#8230;">
</form>

<?php } elseif($clan == "lasombra") { ?>

<form action="/stepthree.php/" method="post">
<table>
	<tr>
	<th>
  <label for="bloodline"><h3>Bloodline</h3></label>
  </th>
  <td>
  <select name="bloodline" id="bloodline" required>
    <option value="">Select Bloodline</option>
    <option value="parent_clan">Parent Clan</option>
		<option value="kiasyd">Kiasyd</option>
  </select>
  </td>
  </tr>
 </table>
  <input type="submit" value="Next step&#8230;">
</form>

<?php } elseif($clan == "malkavian") { ?>

<form action="/stepthree.php/" method="post">
<table>
	<tr>
	<th>
  <label for="bloodline"><h3>Bloodline</h3></label>
  </th>
  <td>
  <select name="bloodline" id="bloodline" required>
    <option value="">Select Bloodline</option>
    <option value="parent_clan">Parent Clan</option>
		<option value="ananke">Ananke</option>
		<option value="knights_of_the_moon">Knights of the Moon</option>
  </select>
  </td>
  </tr>
 </table>
  <input type="submit" value="Next step&#8230;">
</form>

<?php } elseif($clan == "toreador") { ?>

<form action="/stepthree.php/" method="post">
<table>
	<tr>
	<th>
  <label for="bloodline"><h3>Bloodline</h3></label>
  </th>
  <td>
  <select name="bloodline" id="bloodline" required>
    <option value="">Select Bloodline</option>
    <option value="parent_clan">Parent Clan</option>
		<option value="ishtarri">Ishtarri</option>
		<option value="volgirre">Volgirre</option>
  </select>
  </td>
  </tr>
 </table>
  <input type="submit" value="Next step&#8230;">
</form>

<?php } elseif($clan == "tremere") { ?>

<form action="/stepthree.php/" method="post">
<table>
	<tr>
	<th>
  <label for="bloodline"><h3>Bloodline</h3></label>
  </th>
  <td>
  <select name="bloodline" id="bloodline" required>
    <option value="">Select Bloodline</option>
    <option value="parent_clan">Parent Clan</option>
		<option value="telyav">Telyav</option>
  </select>
  </td>
  </tr>
 </table>
  <input type="submit" value="Next step&#8230;">
</form>

<?php } elseif($clan == "tzimisce") { ?>

<form action="/stepthree.php/" method="post">
<table>
	<tr>
	<th>
  <label for="bloodline"><h3>Bloodline</h3></label>
  </th>
  <td>
  <select name="bloodline" id="bloodline" required>
    <option value="">Select Bloodline</option>
    <option value="parent_clan">Parent Clan</option>
		<option value="carpathian">Carpathian</option>
		<option value="koldun">Koldun</option>
  </select>
  </td>
  </tr>
 </table>
  <input type="submit" value="Next step&#8230;">
</form>

<?php } elseif($clan == "ventrue") { ?>

<form action="/stepthree.php/" method="post">
<table>
	<tr>
	<th>
  <label for="bloodline"><h3>Bloodline</h3></label>
  </th>
  <td>
  <select name="bloodline" id="bloodline" required>
    <option value="">Select Bloodline</option>
    <option value="parent_clan">Parent Clan</option>
		<option value="crusader">Crusader</option>
  </select>
  </td>
  </tr>
 </table>
  <input type="submit" value="Next step&#8230;">
</form>

<?php } elseif($clan == "baali") { ?>

<form action="/stepthree.php/" method="post">
<table>
	<tr>
	<th>
  <label for="bloodline"><h3>Bloodline</h3></label>
  </th>
  <td>
  <select name="bloodline" id="bloodline" required>
    <option value="">Select Bloodline</option>
    <option value="parent_clan">Parent Clan</option>
		<option value="angellis_ater">Angellis Ater</option>
  </select>
  </td>
  </tr>
 </table>
  <input type="submit" value="Next step&#8230;">
</form>

<?php } elseif($clan == "cappadocians") { ?>

<form action="/stepthree.php/" method="post">
<table>
	<tr>
	<th>
  <label for="bloodline"><h3>Bloodline</h3></label>
  </th>
  <td>
  <select name="bloodline" id="bloodline" required>
    <option value="">Select Bloodline</option>
    <option value="parent_clan">Parent Clan</option>
		<option value="samedi">Samedi</option>
		<option value="lamia">Lamia</option>
  </select>
  </td>
  </tr>
 </table>
  <input type="submit" value="Next step&#8230;">
</form>

<?php } elseif($clan == "ravnos") { ?>

<form action="/stepthree.php/" method="post">
<table>
	<tr>
	<th>
  <label for="bloodline"><h3>Bloodline</h3></label>
  </th>
  <td>
  <select name="bloodline" id="bloodline" required>
    <option value="">Select Bloodline</option>
    <option value="parent_clan">Parent Clan</option>
		<option value="brahman">Brahman</option>
  </select>
  </td>
  </tr>
 </table>
  <input type="submit" value="Next step&#8230;">
</form>

<?php } elseif($clan == "salubri") { ?>

<form action="/stepthree.php/" method="post">
<table>
	<tr>
	<th>
  <label for="bloodline"><h3>Bloodline</h3></label>
  </th>
  <td>
  <select name="bloodline" id="bloodline" required>
    <option value="">Select Bloodline</option>
    <option value="parent_clan">Parent Clan</option>
		<option value="healer">Healer</option>
  </select>
  </td>
  </tr>
 </table>
  <input type="submit" value="Next step&#8230;">
</form>

<?php } elseif($clan == "nosferatu" || $clan == "caitiff" || $clan == "daughters_of_cacophony" || $clan=="gargoyles") {
  header("location:/stepthree.php"); //IF NO BLOODLINES EXIST FOR THE CLAN, JUMP RIGHT TO THE NEXT STEP. THE BLOODLINE WILL BE SET TO "parent_clan" AUTOMATICALLY
} ?>

<?php include("inc/footer.php"); ?>