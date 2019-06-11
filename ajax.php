<?php
include("exhibitorsManager.php");

if (isset($_POST['action'])) {
    makeExhibitorsTable($_POST['action']);
}

if (isset($_POST['search'])) {
  lookForExposant($_POST['search']);
}

?>
