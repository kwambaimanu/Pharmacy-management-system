<?php
  	session_start();
  	if(isset($_SESSION['manager'])){
    	header('location:home.php');
  	}
?>
<?php include 'includes/header.php'; ?>
<body class="hold-transition login-page">
<a class='btn btn-sm  btn-success' style="float: right; margin-right: 10%;" href='../index.php' role='button'>Home</a>
<div class="login-box" style="width: width: 100%;
    height: 0; ">
    <div class="login-logo">
      <b style="color: white;">Pharma System</b>
    </div>
  
    <div class="login-box-body" style="background-color: #E6E6FA;">
    	<p class="login-box-msg">Sign in as Manager</p>

    	<form action="login.php" method="POST">
      		<div class="form-group has-feedback">
        		<input type="text" class="form-control" name="username" placeholder="Username" required>
        		<span class="glyphicon glyphicon-user form-control-feedback"></span>
      		</div>
          <div class="form-group has-feedback">
            <input type="password" class="form-control" name="password" placeholder="Password" required>
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
      		<div class="row">
    			<div class="col-xs-4">
          			<button type="submit" class="btn btn-primary btn-block btn-flat" name="login"><i class="fa fa-sign-in"></i> Sign In</button>

        		</div>
      		</div>
    	</form>
  	</div>
  	<?php
  		if(isset($_SESSION['error'])){
  			echo "
  				<div class='callout callout-danger text-center mt20'>
			  		<p>".$_SESSION['error']."</p> 
			  	</div>
  			";
  			unset($_SESSION['error']);
  		}
  	?>
</div>
	
<?php include 'includes/scripts.php' ?>
</body>
</html>