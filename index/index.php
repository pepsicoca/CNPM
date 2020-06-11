
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="stylelogin.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet"href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">


</head>

<body>
   
<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->

    <!-- Icon -->
    <div class="fadeIn first">
      <i class="glyphicon glyphicon-user"></i>
    </div>

    <!-- Login Form -->
    <form>
      <input type="email" id="username" class="fadeIn second" name="login" placeholder="login">
      <input type="password" id="password" class="fadeIn third" name="login" placeholder="password">
      <input type="submit" id="btndangnhap" class="fadeIn fourth" value="Log In">
    </form>

    <!-- Remind Passowrd -->
    <div id="formFooter">
      <a class="underlineHover" href="#">Forgot Password?</a>
    </div>

  </div>
</div>

    <script type="text/javascript">
		$("#btndangnhap").click(function() {
			var username=$("#username").val();
            var password=$("#password").val();
            var error = $("#error");
      
		if (username == "") {
			error.html("Tên đăng nhập không được để trống");
			return false;
		}
		
		if (password == "") {
			error.html("Mật khẩu không được để trống");
			return false;
		}
			$.ajax({
				url: 'xulydangnhap.php',
				type: 'POST',
				dataType: 'html',
				data: {username:username ,password:password},
				success:function(response){
					if(response== 1)
					{
						window.location="role.php";
					}
          else {error.html("Mật khẩu hoặc tài khoản không chính xác !");}

				}
			})		
		});
		
	</script> 
</body>

</html>