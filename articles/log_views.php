<?php

session_start();
// Retrieve the full request URI
$full_url = $_SERVER[REQUEST_URI];
// Remove the folders, only keep the {name}.php
$filename = explode("/", $full_url)[2];
// Remove the .php file extension for the unique filename
$page_id = explode(".", $filename)[0];
// What results is the unique filename for blogs, which is in the following format:
// "../data/views/v_${page_id}.txt"
$counter_name = "../data/views/v_" . $page_id . ".txt";

// Check if a text file exists. If not create one and initialize it to zero.
if (!file_exists($counter_name)) {
  $f = fopen($counter_name, "w");
  fwrite($f,"0");
  fclose($f);
}
// Read the current value of our counter file
$f = fopen($counter_name,"r");
$counterVal = fread($f, filesize($counter_name));
fclose($f);
// Has visitor been counted in this session?
// If not, increase counter value by one
if(!isset($_SESSION['hasVisited'])){
  $_SESSION['hasVisited']="yes";
  $counterVal++;
  $f = fopen($counter_name, "w");
  fwrite($f, $counterVal);
  fclose($f);
}

?>
