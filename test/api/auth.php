<?php
    $_POST = json_decode(file_get_contents('php://input'), true);
    
    if(isset($_POST) && !empty($_POST)) {
        $user = $_POST['username'];
        $psw = $_POST['password'];

        if($user == 'admin' && $psw == 'admin') {
?>
            {
                "success": true,
                "message" : "This is admin"
            }
<?php
        } else {
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