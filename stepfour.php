<?php 

//to-do: CHECK TO MAKE SURE THERE IS A CHARACTER BEING EDITED. IF NOT, HEADER() BACK TO INDEX

$char_name = "CHARACTER NAME WILL GO HERE";
//to-do: LOAD CHARACTER NAME INTO THIS VARIABLE

$att = trim(htmlspecialchars($_POST["attributes"])); //THIS METHOD WILL ALMOST CERTAINLY CHANGE ONCE THE ATTRIBUTE SELECTION PAGE HAS JAVASCRIPT APPLIED.

if($att == "psm") {
  $attributes = array (
   "primary" => "physical",
   "secondary" => "social",
   "tertiary" => "mental"
  );
} elseif($att == "pms") {
  $attributes = array (
   "primary" => "physical",
   "secondary" => "mental",
   "tertiary" => "social"
  );
} elseif($att == "spm") {
  $attributes = array (
   "primary" => "social",
   "secondary" => "physical",
   "tertiary" => "mental"
  );
} elseif($att == "smp") {
  $attributes = array (
   "primary" => "social",
   "secondary" => "mental",
   "tertiary" => "physical"
  );
} elseif($att == "mps") {
  $attributes = array (
   "primary" => "mental",
   "secondary" => "physical",
   "tertiary" => "social"
  );
} elseif($att == "msp") {
  $attributes = array (
   "primary" => "mental",
   "secondary" => "social",
   "tertiary" => "physical"
  );
}

//to-do: ASSIGN ATTRIBUTES BASED ON ABOVE ARRAY

$phyiscal_focus = trim(htmlspecialchars($_POST["physical"]));
$social_focus = trim(htmlspecialchars($_POST["social"]));
$mental_focus = trim(htmlspecialchars($_POST["mental"]));

//to-do: ASSIGN ATTRIBUTE FOCUSES

?>
<?php include("inc/header.php"); ?>

<h1><?php echo "Creating ".$title_name; ?></h1>

<pre>
  Attributes set to <?php echo $att; ?>.
  Which means:
  <?php print_r($attributes); ?>.
  Physical focus set to <?php echo $phyiscal_focus; ?>.
  Social focus set to <?php echo $social_focus; ?>.
  Mental focus set to <?php echo $mental_focus; ?>.
</pre>

<?php include("inc/footer.php"); ?>