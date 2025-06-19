<?php 
    include 'header.php';
    
    //receive id from departments
    $id = $_GET['dep_id'];

    // delete 
    $sql = "delete from departments where Id=$id";
    $connection->query($sql);

?>


<?php
    include 'footer.php';
?>