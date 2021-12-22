<html>
	<head>
		<script src = "jquery-3.2.1.js"></script>
		<script>

		</script>
		<style>
			@font-face{
				font-family: blackcastle;
				src: url(BlackCastle.TTF);
			}
			body{
				background-size: 1365px 662px;
			}
			input[type=text]{
				position: absolute;
				width: 700px;
				height: 60px;
				top: 370px;
				left: 250px;
				background-color: #fcf232;
				font-size: 50px;
				color: #383735;
			}
			p{
				position: absolute;
				font-family: Impact;
				font-size: 30px;
				top: 170px;
				left: 230px;
				line-height: 150%;
			}
			button{
				font-family: blackcastle;
				color: yellow;
				font-size: 25px;
			}
			.ButtonStyle{
				width: 150px;
				height: 50px;
                background-color: #502900;
                box-shadow: 5px 5px 5px #191926;
			}
			.ButtonStyle:hover{
                 background-color: #461F00;
            }
			#SubmitName{
				position: absolute;
				top: 375px;
				left: 1000px;
				width: 200px;
				height: 50px;
			}
		</style>
	</head>
		<body background = "rsrc\img\BackgroundImage.jpg">
			<form>
				<input type = "text" id = "Name"></form>
			</form>
				<p>&emsp;&emsp;&emsp;&emsp;&emsp;Type in the name you wish to use.<br>
					<Strong>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp&nbspEXAMPLE</Strong>: Alden Bitterroot<br>
					<strong>NOTE</strong>: If no name is submitted, a random name shall be given to you.</p>
			<button type = "Submit" Value = "SubmitName" class = "ButtonStyle" id = "SubmitName">Submit</button>
		</body>
</html>