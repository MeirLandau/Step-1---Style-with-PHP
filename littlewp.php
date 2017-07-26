<?php
$host = '127.0.0.1';
$db   = 'northwind';
$user = 'root';
$pass = '';
$charset = 'utf8';
$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$opt = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];
$pdo = new PDO($dsn, $user, $pass, $opt);

$stat= $pdo->query('SELECT * FROM ls42_contentsa');
foreach ($stat as $row)

{
    echo "<article><h2>".$row['content_header']."</h2>"."<p>".$row['content_text']."</p><article>";
}
?>
