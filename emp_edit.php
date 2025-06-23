<?php
    include 'header.php';
    $id = $_GET['emp_id'];
    $sql = "update employees set emp_name='sunny' where Id=$id";
    $connection->query($sql);
    echo "edit successfully edit";
?>

<?php 
    include 'footer.php';
?>