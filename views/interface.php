<?php
if (!isset($_SESSION["user"])) {
    echo "Please login before trying to reach the interface";
} else {
    include "controllers/InterfaceController.php"
?>
    <h1>INTERFACE</h1>
<?php
}
?>