<?php 

include 'header.php';

//show all data from departments table

$sql = "select * from departments";
$rowinfo = $connection->query($sql);

// $row = $connection->query($sql)->fetch_assoc();


//$row = $rowinfo->fetch_assoc(); //fetch_assoc work for show first row

//sow departments table first row
// echo "<ul>";
// echo "<li>";
// echo 'Department name :' . $row['dept_name'];
// echo "</li>";
// echo "<li>";
// echo 'Location :' . $row['location'];
// echo "</li>";
// echo "</ul>";


//sow departments table all row
// $dep = 1;
// while($row = $rowinfo->fetch_assoc()){
//     echo '<h2>Department :' .$dep .'</h2>';
//     echo "<ul>";
//     echo "<li>";
//     echo 'Department name :' . $row['dept_name'];
//     echo "</li>";
//     echo "<li>";
//     echo 'Location :' . $row['location'];
//     echo "</li>";
//     echo "</ul>";

//     $dep++;
// }
