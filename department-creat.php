<?php 
    include 'header.php';

    //new department row create
    $sql = "insert into departments values (100, 'Tour', 'Floor 9')";
    $connection->query($sql);
    echo "new department created";
?>


<?php
    include 'footer.php';
?>