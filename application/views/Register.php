<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><html>
    <head>
        <script src = "rsrc\js\jquery-3.2.1.js"></script>
        <script src = "rsrc\js\jquery-birthday-picker.min.js"></script>    
        <link href="<?php echo base_url(); ?>rsrc/css/Style.css" rel='stylesheet' type='text/css' />

    </head>
    <body background ="rsrc\img\BackgroundImage.jpg" id = "BackgroundImage">
        <img id = "Register" src = "rsrc\img\SomeWindow.png" />
        <p id = "NameofGame">Le Ville de Salem</p>
        <img id = "Hangman" src = "rsrc\img\HangMan.png" />
              
        <div class="container">   
		<div class="form-body form-body-info">
			<form action="" method="post">
				<div class="form-group valid-form">
					<input type="text" id = "UserName" class="form-control" name="name" placeholder="Name" required="" value="<?php echo !empty($user['name'])?$user['name']:''; ?>">
					<?php echo form_error('name','<span class="help-block">','</span>'); ?>
				</div>
				<div class="form-group has-feedback">
					<input type="email" id = "email" class="form-control inputEmail" name="email" placeholder="Email" data-error="That email address is invalid" required="" value="<?php echo !empty($user['email'])?$user['email']:''; ?>">
					<?php echo form_error('email','<span class="help-block">','</span>'); ?>
				</div>
				<div class="form-group valid-form">
					<input type="text" id = "phone" class="form-control" name="phone" placeholder="Phone" value="<?php echo !empty($user['phone'])?$user['phone']:''; ?>">
				</div>
				<div class="form-group">
					<input type="password" id = "password" class="form-control inputPassword" name="password" placeholder="Password" required="">
					<?php echo form_error('password','<span class="help-block">','</span>'); ?>
				</div>
				<div class="form-group">
					<input type="password" id = "confirmpassword" class="form-control" data-match=".inputPassword" data-match-error="Whoops, these don't match" name="conf_password" placeholder="Confirm password" required="">
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
					<div id="Mradio">
						<label>
							<input type="radio" name="gender" value="Male" <?php echo $mcheck; ?>>
								Male
						</label>
					</div>
					<div id="Fradio">
						<label>
							<input type="radio" name="gender" value="Female" <?php echo $fcheck; ?>>
								Female
						</label>
					</div>
				</div>
				<div class="form-group">
					<input type="submit" id = "submit" name="regisSubmit" class="btn-primary" value="Submit"/>
				</div>
			</form>
		</div>
		<p class="footInfo">Already have an account? <a href="<?php echo base_url(); ?>users/login">Login here</a></p>
		</div>

        <script>
            $("#birthday").birthdayPicker({
                "defaultDate" : "01-01-1990",
                "maxAge": "100",
                "minAge": "0",
                "maxYear": "2017",
                "monthFormat": "long",
                "sizeClass": "span3"
                });
        </script>
    </body>
</html>


<!-- <form id = "Registration">
            <label for="Uname" id = "username">Username:</label>
            <br>
            <input type="text" id ="UsernameField" />
            <br><br>
            <label for="Pword" id = "password">Password:</label>
            <br>
            <input type="password" id ="PasswordField" />
            <br><br>
            <label for="CPword" id = "Confirmpassword">Confirm Password:</label>
            <br>
            <input type="password" id ="ConfirmPasswordField" />
            <br><br>
            <label for="Email" id = "Email">Email:</label>
            <br>
            <input type="text" id ="EmailField" />
            <br><br>
            <label for="Bday" id = "Bday">Date of Birth:</label>
            <br><br>
            <div id = "birthday"></div><br>
            <input type = "checkbox" name = "Terms" value = "Terms" id = "Terms">
                <span id = "IAgree">I agree to the&nbsp;</span>
                <a href = "Terms.html" target = "_blank">
                <span id = "Terms_Conditions">Terms and Conditions</span>
                </a>
            </input>
        </form> -->

        <!-- <button type = "submit" value = "Submit" class = "Submit" id = "SubmitButton" style = "font-family: blackcastle; font-size: 25px; color: yellow">Register</button> -->



<!-- 
<div class="container">
            <form action="" method="post">
                <div class="form-group">
                    <input type="text" id = "UserName" class="form-control" name="name" placeholder="Name" required="" value="<?php echo !empty($user['name'])?$user['name']:''; ?>">
                    <?php echo form_error('name','<span class="help-block">','</span>'); ?>
                </div>
                <div class="form-group">
                    <input type="email" id = "email" class="form-control" name="email" placeholder="Email" required="" value="<?php echo !empty($user['email'])?$user['email']:''; ?>">
                <?php echo form_error('email','<span class="help-block">','</span>'); ?>
                </div>
                <div class="form-group">
                    <input type="text" id = "phone" class="form-control" name="phone" placeholder="Phone" value="<?php echo !empty($user['phone'])?$user['phone']:''; ?>">
                </div>
                <div class="form-group">
                    <input type="password" id = "password" class="form-control" name="password" placeholder="Password" required="">
                    <?php echo form_error('password','<span class="help-block">','</span>'); ?>
                </div>
                <div class="form-group">
                    <input type="password" id = "confirmpassword" class="form-control" name="conf_password" placeholder="Confirm password" required="">
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
                    <div id="Mradio">
                        <label>
                        <input type="radio" id = "M" name="gender" value="Male" <?php echo $mcheck; ?>>
                            Male
                        </label>
                    </div>
                    <div id="Fradio">
                        <label>
                        <input type="radio" id = "F" name="gender" value="Female" <?php echo $fcheck; ?>>
                            Female
                        </label>
                    </div>
                </div>
                <div class="form-group">
                    <input type="submit" id = "submit" name="regisSubmit" class="btn-primary" value="Submit"/>
                </div>
            </form>

        <p class="footInfo">Already have an account? <a href="<?php echo base_url(); ?>LoginScreen">Login here</a></p>               
        </div> -->