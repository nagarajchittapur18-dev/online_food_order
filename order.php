<?php
$pizza = $_POST['pizza'] ?? 0;
$burger = $_POST['burger'] ?? 0;
$sandwich = $_POST['sandwich'] ?? 0;
$total = $_POST['total'] ?? 0;
?>

<!DOCTYPE html>
<html>
<head>
    <title>Order Summary</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <h2>🧾 Order Summary</h2>

    <?php if ($pizza > 0) echo "<p>Pizza x $pizza</p>"; ?>
    <?php if ($burger > 0) echo "<p>Burger x $burger</p>"; ?>
    <?php if ($sandwich > 0) echo "<p>Sandwich x $sandwich</p>"; ?>

    <hr>

    <h3>Total Amount: ₹<?php echo $total; ?></h3>

    <p class="success">Order Placed Successfully ✅</p>
</div>

</body>
</html>
