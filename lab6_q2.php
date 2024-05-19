<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Details</title>
    <style>
        table {
            width: 20%;
            border-collapse: collapse;
            margin: 25px 0;
            font-size: 18px;
            text-align: center;
        }
        th, td {
            padding: 12px;
            border: 6px solid #000;
        }
        th {
            background-color: #f2f2f2;
            font-weight: bold;
        }
    </style>
</head>
<body>

<?php

$students = [
    ['Name' => 'Alice', 'Program' => 'BIP', 'Age' => 21],
    ['Name' => 'Bob', 'Program' => 'BIS', 'Age' => 20],
    ['Name' => 'Raju', 'Program' => 'BIT', 'Age' => 22]
];

echo "<table>
        <tr>
            <th>Name</th>
            <th>Program</th>
            <th>Age</th>
        </tr>";

foreach ($students as $student) {
    echo "<tr>
            <td>{$student['Name']}</td>
            <td>{$student['Program']}</td>
            <td>{$student['Age']}</td>
          </tr>";
}

echo "</table>";
?>

</body>
</html>