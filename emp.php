<?php 
    include 'header.php';
?>

<table class="table_list">
    <thead>
    <tr>
        <th>SI</th>
        <th>ID</th>
        <th>emp_name</th>
        <th>salary</th>
        <th>department_id </th>
        <th>hire_date</th>
        <th>action</th>
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
            <td><?php echo $row['Id']?></td>
            <td><?php echo $row['emp_name']?></td>
            <td><?php echo $row['salary']?></td>
            <td><?php echo $row['department_id']?></td>
            <td><?php echo $row['hire_date']?></td>
            <td>
                <a href="emp_edit.php? emp_id= <?php echo $row['Id']?>">Edit</a>
                <a onclick="return confirm('confirm to delete')" href="emp_delete.php? emp_id= <?php echo $row['Id']?>">delete</a>
            </td>
        </tr>


        <?php } ?>
    </tbody>
</table>




<?php 
    include 'footer.php';
?>