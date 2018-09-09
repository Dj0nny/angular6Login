<?php
    session_start();

    $_POST = json_decode(file_get_contents('php://input'), true);

    if(isset($_POST) && !empty($_POST)) {
        $user = $_POST['username'];
        $psw = $_POST['password'];

        if($user == 'admin' && $psw == 'admin') {
            $_SESSION['user'] = 'admin';
?>
            {
                "success": true,
                "message" : "admin"
            }
<?php
        } else {
?>
<?php
            $_SESSION['user'] = 'notAdmin';
?>
            {
                "success": false,
                "message": "invalid credetial"
            }
<?php
        }
    } else {
?>
        {
            "success": false,
            "message": "Only POST access"
        }
<?php
    }

?>
