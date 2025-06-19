<?php 
include('connection.php');

//db create

//if database already exists then this database drop
$sql = "drop database if exists join_demo_db";
$connection->query($sql);

//if no database then create database 
$sql = "create database if not exists join_demo_db";
$connection->query($sql);
echo "database created \n";


//select database which database we work
$connection->select_db("join_demo_db");

//create departments table 
$sql = "CREATE TABLE departments (
Id INT PRIMARY KEY,
dept_name VARCHAR(50) NOT NULL,
location VARCHAR(50)
)";

$connection->query($sql);
echo "departments table created \n";

//-- Create employees table

$sql = "CREATE TABLE employees (
Id INT PRIMARY KEY,
emp_name VARCHAR(50) NOT NULL,
salary DECIMAL(10,2),
department_id INT,
hire_date DATE,
FOREIGN KEY (department_id ) REFERENCES departments(id)
)";

$connection->query($sql);
echo "employees table created";

?>