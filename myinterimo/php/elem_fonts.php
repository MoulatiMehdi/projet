<link rel="stylesheet" href="<?php
if (!isset($_SESSION)) session_start();
if (isset($_SESSION['menu']) || $_SESSION['menu'] == 'pageNotFound') echo '/projet-pfe/myinterimo/'
?>css/font.css">