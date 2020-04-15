<?php
require_once __DIR__ . "\\..\\controllers\\InterfaceController.php";

if (!isset($_SESSION["user"])) {
    echo "Please login before trying to reach the interface";
} else {
?>
    <h1>INTERFACE</h1>
<?php
}
?>