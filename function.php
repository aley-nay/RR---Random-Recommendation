<?php
include("db.php");


	$All_Episodes = array($Episode_1, $Episode_2, $Episode_3, $Episode_4, $Episode_5, $Episode_6, $Episode_7, $Episode_8, $Episode_9, $Episode_10);
$random = array_rand($All_Episodes);
$Selected_Ep = $All_Episodes[$random];
echo "<img src='".$Selected_Ep['Episode_Thumb']."'>";
echo "<h2>".$Selected_Ep['Episode_Title']."</h2>";
echo "<b>".$Selected_Ep['Episode_SE']."</b>";
echo "<p>".$Selected_Ep['Episode_Info']."</p>";




?>