<?php
    session_start();

    $user = $_SESSION['user'];

    if($user == 'admin') {
        echo '{
            "message": "Message for the admin",
            "success": true
        }';
    } else if($user == 'notAdmin'){
        echo '{
            "message": "who are you?",
            "success": false
        }';
    }
?>
