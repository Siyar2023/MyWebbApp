<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $newCustomer = [
        "name" => $_POST["name"],
        "email" => $_POST["email"],
        "phone" => $_POST["phone"]
    ];

    $customers = json_decode(file_get_contents("customers.json"), true) ?? [];
    $customers[] = $newCustomer;
    file_put_contents("customers.json", json_encode($customers, JSON_PRETTY_PRINT));

    header("Location: index.php");
    exit();
}
?>

