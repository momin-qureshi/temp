<?php
include("../res/x5engine.php");
$nameList = array("f7c","kre","vt6","y7l","pdg","jg7","ujp","gr6","6rc","svz");
$charList = array("L","S","S","X","T","2","H","5","5","T");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
