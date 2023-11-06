<?php
require 'DbConnection.php';
require 'QueryBuilder.php';
$table = 'students';
$pdo = DbConnection::make();
$q = new QueryBuilder($pdo,$table);
$students = $q->selectAll();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Student Data</title>
    
      <style>

  body {
    background: linear-gradient(112.1deg, rgb(32, 38, 57) 11.4%, rgb(63, 76, 119) 70.2%);
    background-color: rgb(150, 233, 242);
    font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
  }

  h1 {
    text-align: center;
    color: #333;
    padding: 10px;
  }

  table {
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
    margin: auto;
    width: 70%;
    text-align: center;
    padding: 20px;
    background: radial-gradient(263px at 100.2% 3%, rgb(12, 85, 141) 31.1%, rgb(205, 181, 93) 36.4%, rgb(244, 102, 90) 50.9%, rgb(199, 206, 187) 60.7%, rgb(249, 140, 69) 72.5%, rgb(12, 73, 116) 72.6%);
    background: transparent; 
    border: 1px solid transparent; 
  }

  table, th, td {
    border: 1px solid #ccc;
    border: 1px solid transparent;
  }

  th, td {
    padding: 10px;
    text-align: left;
    background-color: transparent;
  }

  th {
    background-color: #333;
    color: white;
  }

tr{
  background: radial-gradient(circle at 18.7% 37.8%, rgb(250, 250, 250) 0%, rgb(225, 234, 238) 90%);  }
</style>

</style>

</head>
<body>
    <h1>Student Data</h1>
    <table>
        <tr>
            <th>Name</th>
            <th>Gender</th>
            <th>Subjects</th>
            <th>City</th>
        </tr>
        <?php foreach ($students as $student) : ?>
            <tr>
                <td><?php echo $student['name']; ?></td>
                <td><?php echo $student['gender']; ?></td>
                <td><?php echo $student['subjects']; ?></td>
                <td><?php echo $student['city']; ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
