<?php
require("../modele/langue.php");
if(!isset($_SESSION['mail']))
{
session_start();
}
include_once('../vue/Contact.php');