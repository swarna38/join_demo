<?php 
include('connection.php');

//select database which database we work
$connection->select_db("join_demo_db");

//-- Insert sample data into departments

$sql = "INSERT INTO departments VALUES
(1, 'HR', 'Floor 1'),
(2, 'IT', 'Floor 2'),
(3, 'Finance', 'Floor 3'),
(4, 'Marketing', 'Floor 4'),
(5, 'Operations', NULL);
";

$connection->query($sql);
echo "departments data inserted \n";

//-- Insert sample data into departments

$sql = "INSERT INTO employees VALUES
(101, 'Hannan Sarkar', 75000, 1, '2020-01-15'),
(102, 'Ismail Hossain', 85000, 2, '2019-05-20'),
(103, 'kysarul Kanak', 65000, 1, '2021-03-10'),
(104, 'Ashikuzzaman', 95000, 3, '2018-11-05'),
(105, 'Parvin Fatema', NULL, 4, '2022-02-28'),
(106, 'Shelly Ahmed', 80000, NULL, '2020-07-12'),
(107, 'Asfaq Ahmed', 70000, 2, '2021-09-15'),
(108, 'Lisa karuzzaman', 90000, NULL, '2019-12-01')";

$connection->query($sql);
echo "employees data inserted \n";
