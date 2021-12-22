<!DOCTYPE html>
<html lang="en">  
<head>
<script src = "rsrc\js\jquery-3.2.1.js"></script>
<script src = "rsrc\js\jquery-birthday-picker.min.js"></script>    
<style>
			@font-face{
                font-family: blackcastle;
                src: url(BlackCastle.TTF);
            }
            #BackgroundImage{
                background-size: 1365px 662px;
            }
            input[type=text]{
                position: absolute;
                width: 300px;
                height: 30px;
                border: 2px solid #ccc;
                border-radius: 4px;
            }
            input[type=password]{
            	position: absolute;
                width: 300px;
                height: 30px;
                border: 2px solid #ccc;
                border-radius: 4px;	
            }
            select{
                border-radius: 4px;
                height: 30px;
                width: 90px;
            }
            label{
                font-size: 18px;
                font-weight: bold;
            }
            button{
                font-size: 23px;
                color: yellow;
            }
            #Register{
                position: absolute;
                top: 55px;
                left: 800px;
                width: 500px;
                height: 550px;
            }
            #NameofGame{
                position: absolute;
                top: -50px;
                left: 40px;
                font-family: blackcastle;
                color: yellow;
                font-size: 70px;
            }
            #Registration{
                position: absolute;
                top: 130px;
                left: 860px;
            }
            #Terms_Conditions{
                color: blue;
                text-decoration: underline;
            }
            #IAgree, #Terms_Conditions{
                font-weight: bold;
                font-size: 18px;
            }
            #Hangman{
                position: absolute;
                top: 100px;
            }
            #birthday{
            	border: none;
            }
            .birthdayPicker{
            	border:none;
            }

            .container{
                position: absolute;
                top: 130px;
                left: 870px;
            }
            .form-control{
                margin-bottom: 30px;
            }
            #username{
                top: 20px;
                position: absolute;
            }
            #email{
                position: absolute;
                top: 70px;
                width: 300px;
                height: 30px;
                border: 2px solid #ccc;
                border-radius: 4px;
            }
            #phone{
                position: absolute;
                top: 120px;
            }
            #password{
                position: absolute;
                top: 170px;
            }
            #confirmpassword{
                position: absolute;
                top: 220px;
            }
            #submit{
                position: absolute;
                top: 350px;
                left: 20px;
                border: none;
                width: 150px;
                height: 50px;
                background-color: #502900;
                box-shadow: 5px 5px 5px #191926;
            }
            #submit:hover{
                background-color: #461F00;
            }
            #Mradio{
                position: absolute;
                top: 270px;
                left: 30px;
            }
            #Fradio{
                position: absolute;
                top: 270px;
                left: 160px;
            }
            .footInfo{
                position: absolute;
                top: 355px;
                left: 200px;
            }
            input[type=submit]{
                font-family: blackcastle;
                color: yellow;
                font-size: 25px;
            }
</style>
</head>
<body background ="<?php echo base_url('rsrc\img\BackgroundImage.jpg'); ?>" id = "BackgroundImage">
<img id = "Register" src = "<?php echo base_url('rsrc\img\SomeWindow.png'); ?>" />
<p id = "NameofGame">Le Ville de Salem</p>
<img id = "Hangman" src = "rsrc\img\HangMan.png" />
<div class="container">

		<div class="form-body form-body-info">
			<form action="" method="post">
				<div class="form-group valid-form">
					<input type="text" class="form-control" name="name" placeholder="Name" required="" value="<?php echo !empty($user['name'])?$user['name']:''; ?>">
					<?php echo form_error('name','<span class="help-block">','</span>'); ?>
				</div>
				<div class="form-group has-feedback">
					<input type="email" class="form-control inputEmail" name="email" placeholder="Email" data-error="That email address is invalid" required="" value="<?php echo !empty($user['email'])?$user['email']:''; ?>">
					<?php echo form_error('email','<span class="help-block">','</span>'); ?>
				</div>
				<div class="form-group valid-form">
					<input type="text" class="form-control" name="phone" placeholder="Phone" value="<?php echo !empty($user['phone'])?$user['phone']:''; ?>">
				</div>
				<div class="form-group">
					<input type="password" class="form-control inputPassword" name="password" placeholder="Password" required="">
					<?php echo form_error('password','<span class="help-block">','</span>'); ?>
				</div>
				<div class="form-group">
					<input type="password" class="form-control" data-match=".inputPassword" data-match-error="Whoops, these don't match" name="conf_password" placeholder="Confirm password" required="">
					<?php echo form_error('conf_password','<span class="help-block">','</span>'); ?>
				</div>
				<div class="form-group">
					<?php
					if(!empty($user['gender']) && $user['gender'] == 'Female'){
						$fcheck = 'checked="checked"';
						$mcheck = '';
					}else{
						$mcheck = 'checked="checked"';
						$fcheck = '';
						}
					?>
					<div class="radio">
						<label>
							<input type="radio" name="gender" value="Male" <?php echo $mcheck; ?>>
							Male
						</label>
					</div>
					<div class="radio">
						<label>
							<input type="radio" name="gender" value="Female" <?php echo $fcheck; ?>>
							Female
						</label>
					</div>
				</div>
					<div class="form-group">
						<input type="submit" name="regisSubmit" class="btn-primary" value="Submit"/>
					</div>
			</form>
		</div>
		<p class="footInfo">Already have an account? <a href="<?php echo base_url(); ?>users/login">Login here</a></p>
</div>
</body>
</html>