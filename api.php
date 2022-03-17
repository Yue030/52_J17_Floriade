<?php
$pdo = new PDO("mysql:dbname=web52;host=localhost;port=3306", "admin", "1234");
$pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

$sql = "INSERT INTO tickets(`firstname`, `lastname`, `phonenumber`, `password`) VALUES (?, ?, ?, ?)";
$stmt = $pdo->prepare($sql);
$stmt->execute(array($_POST["firstname"], $_POST["lastname"], $_POST["phone"], $_POST["pw"]));

echo "
    <script>
        alert('Buy Ticket Success');
        window.location.href = '/';
    </script>
";