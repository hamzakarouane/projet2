<?php
include 'config.php'
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>forgot password</title>
</head>

<body>
	<div class="container">
		<form action="" method="POST" class="login-email">
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">recuperer le mot de passe:</p>
			<div class="input-group">
				<input type="email" placeholder="Email" name="email" value="" required>
			</div>
            <div class="input-group">
				<button name="submit" class="btn">Envoyer</button>
			</div>
            <p class="login-register-text">Retour? <a href="index.php">Login Here</a>.</p>
		</form>
	</div>
</body>
</html>

<?php
if (isset($_POST['email'])){
    $email = $_POST['email'];
    $pwd = uniqid();
    $hashedpwd = md5($pwd);
    $message = "bonjour, votre nouveau mot de passe : $pwd";

    
    if(mail( $email, 'mot de passe oublie', $message)){
           $sql = "UPDATE users SET password = '$hashedpwd' WHERE email = '$email'";
           $result = mysqli_query($conn,$sql);
           if($result){
               //echo "data inserted successfully";
               echo "<script>alert('mail envoye a l adresse : $email.')</script>";
               header("Location: index.php");
            }
            else {
               die(mysqli_error($conn));
            }
           
    }
    else{
        echo "une erreur est survenue";
    }
}
?>