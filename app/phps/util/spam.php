<?php
require_once "jpgraph_antispam.php";

// Craete a new AntiSpam object
$spam = new AntiSpam();

// Generate a random 6 character string
$chars = $spam->Rand(3);
$_SESSION['spamc']=$chars;

// Send to browser
$spam->Stroke();
?>