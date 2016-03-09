<!DOCTYPE html>
<html lang="en">
<head>
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
    <nav>NAVIGATION</nav>
    <div>BREADCRUMBS</div>
  </header>
	<section>
    <h1><?php echo "Creating ".$title_name; ?></h1>