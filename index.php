<?php include("inc/header.php"); ?>

<div class="sorter">
<p>Sort By:</p>
	<ul>
		<li><a href="#"><span class="mobile">Name</span><span class="desktop">Character Name</span></a></li>
		<li><a href="#"><span class="mobile">Setting</span><span class="desktop">Setting</span></a></li>
		<li><a href="#"><span class="mobile">Flag</span><span class="desktop">Action Flagged</span></a></li>
		<li><a href="#"><span class="mobile">XP</span><span class="desktop">Experience Points</span></a></li>
		
	</ul>
</div>


<!-- BEGIN LOOP -->
<?php

include("inc/sample_characters.php");

foreach ($characters as $character) {
echo "<div class='pc_block'>".
	"<a href='#''>".
		"<div class='pc_img'>".
				"<img src='img/character_placeholder.png' alt='Character Name Here'>".
			"</div>".
			"<div class='pc_block_info'>".
				"<h1>".$character['name']."</h1>".
	"</a>".
		"<ul>".
			"<li>".
				"<h2>Setting:</h2>".
				"<span>".$character["setting"]."</span>".
			"</li>".
			"<li>".
				"<h2>Clan:</h2>".
				"<span>".$character['clan']."</span>".
			"</li>".
			"<li>".
				"<h2>Archetype:</h2>".
				"<span>".$character['archetype']."</span>".
			"</li>".
		"</ul>".
		"<p class='description'>".$character['description']."</p>".
	"</div>".
"</div>";
}
?>
<!-- END LOOP -->

<div class="create_new_block">
	<a href="/stepone.php/">
		<div class="pc_img">
				<img src="img/create_new_character.png" alt="Character Name Here">
		</div>
		<div class="pc_block_info">
			<h1>Create Character</h1>
		</div>
	</a>
</div>


<?php include("inc/footer.php"); ?>