<?php 

include "../vendor/autoload.php";

use \leninhasda\hello\SayHello;
$hello = new SayHello;
$hello->setMsg('Hello world');
$hello->sayIt();