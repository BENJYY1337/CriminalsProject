<!DOCTYPE html>
<html lang="en">
<?php
session_start();
include "views/header.php";
?>

<body>
    <?php
    if (isset($_REQUEST['page_id'])) {
        if ($_REQUEST['page_id'] === "login") {
            include "views/login.php";
        } else if ($_REQUEST['page_id'] === "interface") {
            include "views/interface.php";
        } else {
            include "views/404.php";
        }
    } else {
        include "views/login.php";
    }
    ?>

</body>

</html>