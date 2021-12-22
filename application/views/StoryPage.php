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
			#StoryContainer{
				position: absolute;
				top: 100px;
				left: 420px;
				width: 500px;
				height: 550px;
				border: solid;
				background-color: gray;
			}
			#StoryText{
				width: 500px;
				height: 500px;
				margin: 10px;
				overflow: scroll;
				overflow-y: hidden;
				overflow-x: hidden;
			}
			#StoryText p{
				font-weight: bold;
				font-size: 20px;
			}
		</style>
	</head>
	<body background = "rsrc\img\RolesBackground.jpg">
		<p id = "NameofGame">Le Ville de Salem</p>
		<a href = "HomePage">
			<button type = "button" Value = "Home" class = "ButtonStyle" id = "HomeButton">Home</button>
		</a>

		<div id = "StoryContainer">
			<div id = "StoryText">
				<p>alalalalaalalalal</p>
			</div>
		</div>
	</body>
</html>