<?php
declare(strict_types=1);
require_once 'inc/lib.inc.php';
?>
<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Таблица умножения</title>
  <style>
    table {
      border: 2px solid black;
      border-collapse: collapse;
      margin: 20px 0;
    }
    th, td {
      padding: 8px 12px;
      border: 1px solid black;
      text-align: center;
    }
  </style>
</head>
<body>
  <h1>Таблица умножения</h1>
  <!-- Таблица -->
  <?php getTable(8, 8, '#ffe4b5'); ?>
  <!-- Таблица -->
</body>
</html>