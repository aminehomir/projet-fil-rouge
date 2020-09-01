<?php

?>
<?php include 'include/sess.php'; ?>
<?php include 'include/connexion.php'; ?>
<?php

if(isset($_POST['submit'])){
    $user = $_POST['user'];
    $pass = $_POST['pass'];

    $req = $bd->query('select count(*) from user where user="'.$user.'" and password="'.$pass.'"');
    
    $res = $req->fetchColumn();
    if($res == 1){
        $_SESSION['user']=$user;
        header('location:index.php');
    }else{
        header('location: login.php?message=error');
    }
    
}


?>
<!doctype html>
<html lang="en-US">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>
        <title>login admin</title>
        
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		
	</head>
	

               


<!------ Include the above in your HEAD tag ---------->

<body>
    <div id="login">
        <h3 class="text-center text-white pt-5">Login form</h3>
        <div class="container">
        <div class="col-md-5 mx-auto p-3">
                <?php if(isset($_GET['message']) && $_GET['message']== 'error'): ?>
                    <div class="alert alert-danger">votre username ou password incorrect
                        <span class="close" data-dismiss="alert">&times;</span>
                    </div>
                <?php endif; ?>
        </div>
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form" action="" method="post">
                            <h3 class="text-center text-info">Login admin</h3>
                            <div class="form-group">
                                <label for="username" class="text-info">Username:</label><br>
                                <input type="text" name="user" id="username" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-info">Password:</label><br>
                                <input type="password" name="pass" id="password" class="form-control">
                            </div>
                            <div class="form-group">
                                
                                
                                <button type="submit" name="submit" class="btn btn-info btn-md">Login</button>
                            </div>
                           
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
