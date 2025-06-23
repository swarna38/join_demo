<?php 
    include 'header.php';
    $id = $_GET['emp_id'];
    $sql = "delete from employees where I`d=$id";
    $connection->query($sql);
    echo "successfully deleted";
?>

<?php 
    include 'footer.php';
?>    