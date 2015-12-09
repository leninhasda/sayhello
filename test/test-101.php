<?php 

include "../SayHello.php";

$hello = new \leninhasda\hello\SayHello;
$hello->setMsg('Hello world');
$hello->sayIt();