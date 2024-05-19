<!DOCTYPE html> 
<html lang="en"> 
<head> 
<title>Lab 6 Q1</title> 
</head> 
<body> 
<?php  
$name = "NUR AFIFAH BINTI NOR'AZMI";
$matric_number = "DI220045";
$course = "Bachelor of Information Technology";
$year_of_study = "Year 2 Semester 1";
$address = "No 1, Lorong Permai 2E, Taman Pendamaran Permai, 42000 Port Klang, Selangor";
?> 
<table> 
<tr> 
<td>Name</td> 
<td><?php echo "$name"; ?></td>
</tr>

<tr>
<td>Matric Number</td> 
<td><?php echo "$matric_number"; ?></td>
</tr>

<tr>
<td>Course</td> 
<td><?php echo "$course"; ?></td>
</tr>

<tr>
<td>Year of Study</td> 
<td><?php echo "$year_of_study"; ?></td>
</tr>

<tr>
<td>Address</td> 
<td><?php echo "$address"; ?></td>
</tr>

</table> 
</body> 
</html>