<?php
if (isset($_GET["index"])) {
    $customers = json_decode(file_get_contents("customers.json"), true) ?? [];
    array_splice($customers, $_GET["index"], 1);
    file_put_contents("customers.json", json_encode($customers, JSON_PRETTY_PRINT));

    header("Location: index.php");
    exit();
}
?>
