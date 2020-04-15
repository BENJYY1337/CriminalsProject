<?php
session_start();
if (!isset($_SESSION["user"])) {
    echo "Please login before trying to reach the interface";
} else {
    require_once "../controllers/InterfaceController.php"
?>
    <h1>INTERFACE</h1>
<?php
}
?>