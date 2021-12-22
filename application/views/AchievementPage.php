<html>
	<head>
	<script src = "jquery-3.2.1.js"></script>
		<script></script>
		<style>
			body{
                background-size: 1365px 662px;
                background-repeat: no-repeat;
                background-attachment: fixed;
            }
            p{
            	font-size: 30px;
            	color: #e8e8e8;;
            }
            #NameofGame{
				font-family: blackcastle;
				color: yellow;
				font-size: 70px;
			}
			button{
				font-family: blackcastle;
				color: yellow;
				font-size: 25px;
			}
			.ButtonStyle{
				width: 150px;
				height: 50px;
				border: none;
                background-color: #502900;
                box-shadow: 5px 5px 5px #191926;
			}
			.ButtonStyle:hover{
                 background-color: #461F00;
            }
            #HomeButton	{
				position: absolute;
				border: none;
				left: 50px;
				top: 100px;
				width: 200px;
				height: 50px;
			}
			#Achievements{
				position: absolute;
				top: 200px;
				left: 150px;
			}
		</style>
	</head>
	<body background = "rsrc\img\RolesBackground.jpg">
		<p id = "NameofGame">Le Ville de Salem</p>
		<a href = "HomePage">
			<button type = "button" Value = "Home" class = "ButtonStyle" id = "HomeButton">Home</button>
		</a>
		<div id = "Achievements">
		<div id = "Doctor">
			<p>
				DOCTOR
			</p>
		</div>
		<div id = "Escort">
			<p>
				ESCORT
			</p>
		</div>
		<div id = "Investigator">
			<p>
				INVESTIGATOR
			</p>
		</div>
		<div id = "Mafia">
			<p>
				MAFIA
			</p>
		</div>
		<div id = "SerialKiller">
			<p>
				SERIAL KILLER
			</p>
		</div>
		<div id = "Survivor">
			<p>
				SURVIVOR
			</p>
		</div>
		</div>
	</body>
</html>