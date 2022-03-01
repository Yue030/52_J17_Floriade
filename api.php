<?php

$pdo = new PDO("mysql:dbname=web52;host=localhost;port=3306", "admin", "1234");
$pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

$sql = "INSERT INTO tickets(`firstname`, `lastname`, `phone`, `password`) values (?, ?, ?, ?)";
$stmt = $pdo->prepare($sql);

$datas = array($_POST["first-name"], $_POST["last-name"], $_POST["phone-number"], $_POST["password"]);
$stmt->execute($datas);

echo "
    <script>
        alert('訂票成功');
        window.location = '/';
    </script>
";