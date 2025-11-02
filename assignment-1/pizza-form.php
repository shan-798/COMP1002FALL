<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Order Complete</title>
</head>
<body>
        <header>
        <h1>Your order has been processed!</h1>
    </header>
    <main>
<?php

	$fname = $_GET["fname"];
		echo('<p>Thank you, '.$fname.'! Your order will be here shortly.</p>');
?>


</main>
    <footer>
        <br>
        <small>©PizzaDude USA. All rights reserved.</small>
    </footer>
</body>
</html>
