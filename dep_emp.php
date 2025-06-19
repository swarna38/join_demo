<?php
include 'header.php';

/**
 * Array
(
    [dept_id] => 1
    [dept_name] => HR
    [location] => Floor 1
    [emp_id] => 101
    [emp_name] => Hannan Sarkar
    [salary] => 75000.00
    [hire_date] => 2020-01-15
)


 * 
 */

?>

<table class="table_list">
    <thead>
        <tr>
            <th>SL</th>
            <th>Department ID</th>
            <th>Dep Name</th>
            <th>Dep Location</th>
            <th>EMP ID</th>
            <th>EMP name</th>
            <th>EMP salary</th>
            <th>EMP hire_date</th>
        </tr>
    </thead>

    <tbody>

        <?php 
        $sql = "select 
        d.Id as dept_id, 
        d.dept_name,
        d.location,
        e.Id as emp_id, 
        e.emp_name,
        e.salary, 
        e.hire_date from departments as d 
        join employees as e 
        on d.Id = e.department_id";


        $rowinfo = $connection->query($sql);

        $dep = 1;
        while($row = $rowinfo->fetch_assoc()){
        ?>

        <tr>
            <td><?php echo $dep++;  ?></td>
            <td><?php echo $row['dept_id'];  ?></td>
            <td><?php echo $row['dept_name'];  ?></td>
            <td><?php echo $row['location'];  ?></td>
            <td><?php echo $row['emp_id'];  ?></td>
            <td><?php echo $row['emp_name'];  ?></td>
            <td><?php echo $row['salary'];  ?></td>
            <td><?php echo $row['hire_date'];  ?></td>
        </tr>


        <?php } ?>

    </tbody>

</table>

<?php
include 'footer.php';

?>