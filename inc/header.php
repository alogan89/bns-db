<!DOCTYPE html>
<html lang="en">
<head>
<style type="text/css">
  ul, li {
    display: inline-block;
  }
</style>
	<meta charset="UTF-8">
  <!-- <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="/css/style.css"> -->
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
    <span><a href="#">LOGO</a></span>
      <ul>
        <li><a href="#">HOME</a> |</li>
        <li><a href="#">CHARACTERS</a> |</li>
        <li><a href="#">SETTINGS</a></li>
      </ul>
    </nav>
  </header>
	<section>