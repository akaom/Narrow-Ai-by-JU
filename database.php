<?php

$conn = mysqli_connect("localhost", "om", "382418", "database");
if(!$conn) {
die("Connection error" . mysqli_connect_error($conn));
} else {
echo "Connection Occoured and done" . "<br>";
}

$sql = "CREATE TABLE emp (Sid INT PRIMARY KEY, Sname VARCHAR(13), Depart VARCHAR(10))";
if(mysqli_query($conn,$sql)) {
echo "table created";
} else {
echo "table cant create" . mysqli_error($conn);
}

$sql = "INSERT INTO emp (Sid, Sname, Depart) VALUES (1,'om','ce'),(2,'simba','dog')";
if(mysqli_query($conn,$sql)) {
echo " data inserted";
} else {
echo "cant insert data" . mysqli_error($conn);
}

$sql="SELECT * FROM emp";
$result=mysqli_query($conn,$sql);

if(mysqli_num_rows($result)>0) {
echo "<table border=1>";
echo "<tr> <th> employee id </th> <th> Name </th> <th> Department </th> </tr>";

while($row=(mysqli_fetch_assoc($result))) {
echo "<tr>";
echo "<td>" . $row['Sid'] . "</td>";
echo "<td>" . $row['Sname']  . "</td>";
echo "<td>" . $row['Depart'] . "</td>";
echo "</tr>";
}
echo "</table>";
} else {
echo "error to fetch data";
}

mysqli_close($conn);
?>
