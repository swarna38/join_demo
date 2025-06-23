<?php
    include 'header.php';

    $sql = " insert into employees (emp_name, salary, department_id, hire_date) values ('swarna', 10000, 2, '2025-06-02')";
    $connection->query($sql);
    echo "new emp create";

?>

<?php 
    include 'footer.php';
?>

 
