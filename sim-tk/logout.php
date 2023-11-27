<?php
    session_start();
    session_destroy();
    echo "<script>location='../index.php'</script>";
?>