<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <title>Login</title>
    <link rel = "icon" href ="/OnlinePizzaDelivery/img/logo.jpg" type = "image/x-icon">

<style>
    body{
		width: 100%;
	    height: calc(100%);
	    /*background: #007bff;*/
	}
	main#main{
		width:100%;
		height: calc(100%);
		background:white;
	}
	#login-right{
		position: absolute;
		right:0;
		width:40%;
		height: calc(100%);
		background:white;
		display: flex;
		align-items: center;
	}
	#login-left{
		position: absolute;
		left:0;
		width:60%;
		height: calc(100%);
		background:#00000061;
		display: flex;
		align-items: center;
	}
	#login-right .card{
		margin: auto
	}
	.logo {
	    margin: auto;
	    font-size: 8rem;
	    background: white;
	    border-radius: 50% 50%;
	    height: 29vh;
	    width: 13vw;
	    display: flex;
	    align-items: center;
	}
	.logo img{
		height: 80%;
		width: 80%;
		margin: auto
	}
</style>
</head>
<body>
    <main id="main" class=" bg-dark">
        <div id="login-left">
        <div class="logo">
            <img src="/OnlinePizzaDelivery/img/sample_logo.png" alt="">
        </div>
        </div>
        <div id="login-right">
        <div class="card col-md-8">
            <div class="card-body">
            <form action="partials/_handleLogin.php" method="post">
                <div class="form-group">
                <label for="username" class="control-label"><b>Username</b></label>
                <input type="text" id="username" name="username" class="form-control">
                </div>
                <div class="form-group">
                <label for="password" class="control-label"><b>Password</b></label>
                <input type="password" id="password" name="password" class="form-control">
                </div>
                <center><button type="submit" class="btn-sm btn-block btn-wave col-md-4 btn-primary">Login</button></center>
            </form>
            </div>
        </div>
        </div>
    </main>  


    <?php
        if(isset($_GET['loginsuccess']) && $_GET['loginsuccess']=="false"){
        echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong>Warning!</strong> Invalid Credentials
                <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">×</span></button>
                </div>';
        }
    ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>         
    <script src="https://unpkg.com/bootstrap-show-password@1.2.1/dist/bootstrap-show-password.min.js"></script>
</body>
</html>