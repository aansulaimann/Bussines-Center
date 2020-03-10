<?php
if( !session_id() ) session_start(); 

// call all class
require_once("../app/init.php");

// instance for class App
$app = new App();