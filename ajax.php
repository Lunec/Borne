<?php
include("exhibitorsManager.php");

if (isset($_POST['action'])) {
    makeExhibitorsTable($_POST['action']);
}

?>
