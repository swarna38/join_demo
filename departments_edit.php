<?php 
    include 'header.php';
    //receive id from departments
    $id = $_GET['dep_id'];
    // echo base64_decode($id);

    $sql = "update departments set dept_name='hangout' where Id=$id";
    $connection->query($sql);

?>


<?php
    include 'footer.php';
?>