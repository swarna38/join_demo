<?php session_start();
    include 'connection.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        .table_list{
            width: 90%;
            border : 1px solid black;
            border-collapse: collapse;
            margin: 0 auto;
        }
        .table_list tr th, .table_list tbody tr td{
            padding: 5px;
            border : 1px solid black;
            text-align: center;
        }
        .table_list tbody tr td a{
            margin : 0px 10px;
        }
         
    </style>
</head>
<body>