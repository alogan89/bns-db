<?php
include("inc/header.php"); //HEADER CONTAINS BASIC PAGE SETUP, NAVIGATION, BREADCRUMBS, AND PAGE TITLE, WHICH IS SET DYNAMICALLY BASED ON THE CHARACTER'S NAME
?>
<h1><?php echo "Creating ".$title_name; ?></h1>
<h2>Basic Information</h2>

<form action="/steptwo.php/" method="post"> <!-- I KNOW IT'S A TABLE. GET OVER IT. TRUST IN MY CSS-FU! -->
	<table>
		<tr>
			<th><label for="char_name"><h3>Name</h3></label></th>
			<td><input type="text" name="char_name" id="char_name" placeholder="Enter your Character's Name" required/> </td>
		</tr>
		<tr>
			<th><label for="archetype"><h3>Archetype</h3></label></th>
			<td><input type="text" name="archetype" id="archetype" placeholder="Enter your Character's Archetype" required/></td>
		</tr>
		<tr>
			<th><label for="clan"><h3>Clan</h3></label></th>
			<td>
			<select name="clan" id="clan" required>
		   		<option value="">Select Clan</option>
				<optgroup label="Greater Clans">
			     	<option value="assamite">Assamite</option>
			     	<option value="brujah">Brujah</option>
			     	<option value="followers_of_set">Followers of Set</option>
			     	<option value="gangrel">Gangrel</option>
			     	<option value="giovanni">Giovanni</option>
			     	<option value="lasombra">Lasombra</option>
			     	<option value="malkavian">Malkavian</option>
			     	<option value="nosferatu">Nosferatu</option>
			     	<option value="toreador">Toreador</option>
			     	<option value="tremere">Tremere</option>
			     	<option value="tzimisce">Tzimisce</option>
			     	<option value="ventrue">Ventrue</option>
			     	<option value="caitiff">Caitiff</option>
		    	</optgroup>
				    <optgroup label="Lesser Clans">
				    <option value="baali">Baali</option>
				    <option value="cappadocians">Cappadocians</option>
				    <option value="ravnos">Ravnos</option>
				    <option value="salubri">Salubri</option>
				    <option value="daughters_of_cacophony">Daughters of Cacophony</option>
				    <option value="gargoyles">Gargoyles</option>
			    </optgroup>
			</select>
			</td>
		</tr>
		<tr>
			<th><label for="setting"><h3>Setting</h3></label></th>
			<td>
			<select name="setting" id="setting" required>
    			<option value="">Select Setting</option>
				<option value="cam/anarch">Camarilla / Anarch</option>
				<option value="sabbat">Sabbat</option>
			</select>
			</td>
		</tr>
		<tr>
			<th><label for="sect"><h3>Sect</h3></label></th>
			<td>
			<select name="sect" id="sect" required>
		    	<option value="">Select Sect</option>
				<option value="camarilla">Camarilla</option>
				<option value="anarch">Anarch Movement</option>
				<option value="sabbat">Sabbat</option>
			</select>
			</td>
		</tr>
		<tr>
			<th><label for="title"><h3>Title</h3></label></th>
			<td><input type="text" name="title" id="title" placeholder="Enter your Character's Title, if any."/></td>
		</tr>
	</table>
	<input type="submit" value="Next step&#8230;">
</form>

<?php
include("inc/footer.php"); //FOOTER JUST CLOSES OUT PAGE ARCHITECHTURE
?>