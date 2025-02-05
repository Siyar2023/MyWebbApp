<?php
$customers = json_decode(file_get_contents("customers.json"), true) ?? [];
?>

<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8">
    <title>CRM app</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h2>Costumer list</h2>
<table border="1">
    <tr>
        <th>Name</th>
        <th>E-Mail</th>
        <th>Phone</th>
        <th>Delete</th>
    </tr>
    <?php foreach ($customers as $index => $customer): ?>
        <tr>
            <td><?= htmlspecialchars($customer["name"]) ?></td>
            <td><?= htmlspecialchars($customer["email"]) ?></td>
            <td><?= htmlspecialchars($customer["phone"]) ?></td>
            <td><a href="delete_customer.php?index=<?= $index ?>">❌</a></td>
        </tr>
    <?php endforeach; ?>
</table>

<h2>Add costumer</h2>
<form action="add_customer.php" method="post">
    <input type="text" name="name" placeholder="Name" required>
    <input type="email" name="email" placeholder="E-Mail" required>
    <input type="text" name="phone" placeholder="Phone">
    <button type="submit">Add</button>
</form>
</body>
</html>
