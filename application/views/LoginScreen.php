<html>
	<head>
		<style>
			@font-face{
				font-family: "blackcastle";
				src: url("rsrc\fonts\BlackCastle.TTF");
			}
			#LoginBackground{
				background-size: 1365px 662px;
			}
			button{
				font-family: blackcastle;
				color: yellow;
				font-size: 25px;
			}
			#LoginBox{
				position: absolute;
				left: 500px;
				top: 130px;
				width: 700px;
				height: 470px;
			}
			#TextBox{
				position: absolute;
				left: 620px;
				top: 350px;
			}
			.ButtonStyle{
				position: absolute;
				border: none;
				left: 680px;
				top: 460px;
				width: 150px;
				height: 50px;
                background-color: #502900;
                box-shadow: 5px 5px 5px #191926;
			}
            .ButtonStyle:hover{
                 background-color: #461F00;
            }
			#Fbpic{
				position: absolute;
				width: 50px;
				height: 50px;
				top: 430px;
				left: 960px;
				background-size: 45px 45px;
                box-shadow: 4px 4px 4px #191926;
			}
            .FbButtonStyle: hover{
                
            }
            .TwitterButtonStyle: hover{
                
            }
			#Twitterpic{
				position: absolute;
				width: 50px;
				height: 50px;
				top: 430px;
				left: 1040px;
				background-size: 45px 45px;
                box-shadow: 4px 4px 4px #191926;
			}
			#NameofGame{
				font-family: blackcastle;
				color: yellow;
				font-size: 70px;
			}
			a:link {
    			text-decoration: none;
			}
			a:visited {
    			text-decoration: none;
			}
			a:hover {
    			text-decoration: none;
			}
			a:active {
    			text-decoration: none;
			}
			.container{
				position: absolute;
				top: 330px;
				left: 630px;
			}
			#LoginButton{
				position: absolute;
				left: 300px;
			}
			.btn-primary{
				position: absolute;
				left: 20px;
				top: -70px;
				border: none;
				width: 150px;
				height: 50px;
                background-color: #502900;
                box-shadow: 5px 5px 5px #191926;
			}
			.btn-primary:hover{
				background-color: #461F00;
			}
			.form-control{
				width: 250px;
				height: 30px;
			}
			input[type=submit]{
				font-family: blackcastle;
				color: yellow;
				font-size: 25px;
			}
			#Name{
				border: 2px solid #ccc;
                border-radius: 4px;
                margin-bottom: 30px;
			}
			#Password{
				border: 2px solid #ccc;
                border-radius: 4px;
			}
			.footInfo{
				position: absolute;
				top: 120px;
			}
		</style>
	</head>
	<body background ="rsrc\img\LoginBackground.jpg" id = "LoginBackground" >
		<a href = "HomePage"><p id = "NameofGame">Le Ville de Salem</p></a>
		<img id = "LoginBox" src = "rsrc\img\ForLogin.PNG" />
		
		<form>
				<a href = "https://www.fb.com">
                    <div>
                        <img src = "rsrc\img\FbLogo.png" id = "Fbpic" class = "FbButtonStyle" >
                    </div>
                </a>
				<a href = "https://www.twitter.com">
                    <div>
                        <img src = "rsrc\img\TwitterLogo.PNG" id = "Twitterpic" class = "TwitterButtonStyle" >
                    </div>
                </a>
		</form>

		<div class="container">
    		<?php
    			if(!empty($success_msg)){
        			echo '<p class="statusMsg">'.$success_msg.'</p>';
    			}elseif(!empty($error_msg)){
       				echo '<p class="statusMsg">'.$error_msg.'</p>';
    			}
   			?>
   			<form action="" method="post">
       			<div class="form-group has-feedback" id = "Name">
           			<input type="text" class="form-control" name="name" placeholder="Name" required="" value="">
           			<?php echo form_error('name','<span class="help-block">','</span>'); ?>
       			</div>
       			<div class="form-group" id = "Password">
        			<input type="password" class="form-control" name="password" placeholder="Password" required="">
          			<?php echo form_error('password','<span class="help-block">','</span>'); ?>
       			</div>
        		<div class="form-group" id = "LoginButton">
           			<input type="submit" name="loginSubmit" class="btn-primary" value="Login"/>
       			</div>
   			</form>
    		<p class="footInfo">Don't have an account? <a href="<?php echo base_url(); ?>users/registration">Register here</a></p>
		</div>
	</body>
    <script>
    
    </script>
</html>

<!-- 
<form id = "TextBox">
	<label for="Uname" id = "username" style = "font-family: blackcastle; font-size: 25px; color: yellow">Username:</label>
	<input type="text" id ="Uname"/>
	<br><br><br>
	<label for="Pword" id = "password" style = "font-family: blackcastle; font-size: 25px; color: yellow">Password:</label>
	<input type="text" id ="Pword"/>
</form> -->
<!-- 
<button type = "submit" value = "Login" class = "LoginStyle" id = "LoginButton">Login</button> 
<a href = "Register">
<button type = "button" Value = "Register" class = "ButtonStyle" id = "RegisterButton">Register</button>
</a>
-->