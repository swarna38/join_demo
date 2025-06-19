<?php
    include 'header.php';
?>

<table class="table_list">
    <thead>
        <tr>
            <th>SI</th>
            <th>Id</th>
            <th>Name</th>
            <th>Location</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>

    <?php
        //show all data from departments table
        $sql = "select * from departments";
        $rowinfo = $connection->query($sql);

        $dep = 1;

        while($row = $rowinfo->fetch_assoc()){

    ?>
        <tr>
            <td><?php echo $dep++ ?></td>
            <td><?php echo $row['Id'] ?></td>
            <td><?php echo $row['dept_name'] ?></td>
            <td><?php echo $row['location'] ?></td>
            <td>
                <a href="departments_edit.php? dep_id= <?php echo $row['Id'] ?>">Edit</a> 
                <a onclick="return confirm('confirm to delete')" href="departments_delete.php? dep_id= <?php echo $row['Id'] ?>">Delete</a> 
                <!-- encrypted base64_encode -->
            </td>
        </tr>


    <?php 
        }
    ?>    
    </tbody>
</table>




<?php 
    include 'footer.php';
?>