<?php 
    session_start();
    session_destroy();
        if(!$_SESSION['name'])
        {
            echo "<script>alert('You have successfully logged out!.'); window.location.href='index.php'</script>";
        }
    
?>