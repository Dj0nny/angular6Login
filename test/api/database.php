<?php
    session_start();

    $user = $_SESSION['user'];

    if($user == 'admin') {
        echo '{
            "message": "Welcome admin",
            "success": true
        }';
    } else if($user == 'notAdmin'){
        echo '{
            "message": "Invalid credentials",
            "success": false
        }';
    }
?>
