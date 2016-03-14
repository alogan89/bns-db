<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/css/style.css">
  <?php
    if (!isset($char_name)) {
      $title_name = "Your Character";
    } else {
      $title_name = $char_name;
    }
      echo "<title> Creating ".$title_name."</title>";
  ?>
</head>
<body>
	<header>
    <nav> <!-- SAVE PROGRESS WHEN LEAVING A PAGE? -->
    <span class="logo"><a href="#">LOGO</a></span>
      <ul class="main_nav">
        <li><a href="/index.php"><img src="/img/home.png" alt="Home"><span>HOME |</span></a></li>
        <li><a href="#"><img src="/img/characters.png" alt="Characters"><span>CHARACTERS</span></a></li>
        <li><a href="#"><img src="/img/settings.png" alt="Settings"><span>SETTINGS</span></a></li>
      </ul>
    </nav>
  </header>
	<section class="clearfix">