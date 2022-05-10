<?php

require_once("data/flight.php");

$pilot = new Pilot();
$pilot->name = "Shinta";
$pilot->information("CGK - LBJ");

$copilot = new Copilot();
$copilot->name = "Nur";
$copilot->information("LBJ - DPS");