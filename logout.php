

<?php
    session_start();
    if(isset($_SESSION['ad_no']))
    {
        
            session_unset();
                session_destroy();
                header("location: index.php"); 
       
    }
    else
    {  
        header("location: view_result.php");
    }
?>