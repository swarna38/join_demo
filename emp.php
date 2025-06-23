<?php 
    include 'header.php';
?>

<table class="table_list">
    <thead>
    <tr>
        <th>SI</th>
        <th>emp_name</th>
        <th>salary</th>
        <th>department_id </th>
        <th>hire_date</th>
    </tr>
    </thead>
    <tbody>
        <?php
            $sql = "select * from employees";
            $rowinfo = $connection->query($sql);
            $dep = 1;
            while($row = $rowinfo->fetch_assoc()){

        ?>

        <tr>
            <td><?php echo $dep++?></td>
            <td><?php echo $row['emp_name']?></td>
            <td><?php echo $row['salary']?></td>
            <td><?php echo $row['department_id']?></td>
            <td><?php echo $row['hire_date']?></td>
        </tr>


        <?php } ?>
    </tbody>
</table>




<?php 
    include 'footer.php';
?>