<?php
require_once '../classes/config.php';
session_destroy();

header('location:../../index.php');
exit();
 ?>