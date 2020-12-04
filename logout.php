<?php 
    session_start();
    session_destroy();
        if(!$_SESSION['name'])
        {
            echo "<script>alert('You Have logged out successfully!'); window.location.href='index.php'</script>";
            exit();
        }
    
?>