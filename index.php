<?php include("inc/header.php"); ?>

<div>
	<p>
		Sort by:
	</p>
	<ul class="sort">
		<li><a href="#">Character Name</a></li>
		<li><a href="#">Setting</a></li>
		<li><a href="#">Action Needed</a></li>
		<li><a href="#">Experience</a></li>
	</ul>
</div>

<!-- BEGIN LOOP -->

<div class="pc_block">
	<div class="pc_img">
		<img src="img/character_placeholder.png" alt="Character Name Here">
	</div>
	<div class="pc_block_info">
		<h1>Character Name</h1>
		<ul>
			<li>
				<h2>Setting:</h2>
				<span>Cam/Anarch</span>
			</li>
			<li>
				<h2>Clan:</h2>
				<span>Toreador (Bloodline Goes Here)</span>
			</li>
			<li>
				<h2>Archetype:</h2>
				<span>Free Spirit</span>
			</li>
		</ul>
	</div>
</div>

<div class="pc_block">
	<div class="pc_img">
		<img src="img/character_placeholder.png" alt="Character Name Here">
	</div>
	<div class="pc_block_info">
		<h1>Character Name</h1>
		<ul>
			<li>
				<h2>Setting:</h2>
				<span>Cam/Anarch</span>
			</li>
			<li>
				<h2>Clan:</h2>
				<span>Toreador (Bloodline Goes Here)</span>
			</li>
			<li>
				<h2>Archetype:</h2>
				<span>Free Spirit</span>
			</li>
		</ul>
	</div>
</div>

<div class="create_new_block">
	<a href="/stepone.php/">
		<div class="pc_img">
				<img src="img/create_new_character.png" alt="Character Name Here">
		</div>
		<div class="pc_block_info">
			<h1>Create New Character</h1>
		</div>
	</a>
</div>

<!-- END LOOP -->

<a href="/stepone.php/">Start here</a>

<?php include("inc/footer.php"); ?>