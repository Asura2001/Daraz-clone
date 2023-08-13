<?php
    $username = "root";
    $password = "";
    $server = "localhost";
    $database = "dummy_daraz";

// connection Query

    $connection = mysqli_connect($server, $username, $password, $database);

    if($connection){
        ?>
        <script>
            // alert('Connection Successfull.');
        </script>
        <?php
    }
    else{
        ?>
        <script>
            alert('No! Connection.');
        </script>
        <?php
    }
?>