<html>
	<head>
		<script src = "jquery-3.2.1.js"></script>
		<script>
			$(document).ready(function(){
				$("#StoryButton").click(function(){
					$("#Story").show();
				});
				$(".CloseButton").click(function(){
					$("#Story").hide();
				});
			});
			/*
			$(document).ready(function(){
				$("#TutorialButton").click(function(){
					$("#Tutorial").show();
				});
				$(".CloseButton").click(function(){
					$("#Tutorial").hide();
				});
			});
			*/
		</script>
		<style>
			@font-face{
				font-family: blackcastle;
				src: url(BlackCastle.TTF);
			}
			#HomepageBackground{
				background-size: 1365px 662px;
			}
			button{
				font-family: blackcastle;
				color: yellow;
				font-size: 25px;
			}
			#PlayButton{
				position: absolute;
				border: none;
				left: 580px;
				top: 30px;
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
			#HomeButton	{
				position: absolute;
				border: none;
				left: 50px;
				top: 50px;
				width: 200px;
				height: 50px;
			}
			#logoutButton{
				position: absolute;
				border: none;
				width: 50px;
				height: 50px;
				top: 55px;
				left: 1300px;
				background-size: 100%;
			}
			#StoryButton{
				position: absolute;
				border: none;
				left: 80px;
				top: 170px;
				width: 125px;
				height: 125px;
				background: url("StoryButton.PNG");
			}
			#TutorialButton{
				position: absolute;
				border: none;
				left: 80px;
				top: 320px;
				width: 125px;
				height: 125px;
			}
			#RolesButton{
				position: absolute;
				border: none;
				left: 80px;
				top: 470px;
				width: 125px;
				height: 125px;
				background: url("LastWill.PNG");
			}
			#advertise{
				position: absolute;
				width: 420px;
				height: 440px;
				top: 160px;
				left: 830px;
			}
			#Video{
				position: absolute;
				width: 420px;
				height: 440px;
				top: 160px;
				left: 300px;
			}
			#Profile{
				position: absolute;
				width: 250px;
				height: 60px;
				top: 50px;
				left: 1030px;
			}
			#LobbyIcon{
				position: absolute;
				width: 64px;
				height: 64px;
				top: 47px;
				left: 955px;
			}
			#InviteFriends{
				position: absolute;
				width: 410px;
				height: 410px;
				top: 183px;
				left: 835px;
			}
			#Youtube{
				position: absolute;
				top: 183px;
				left: 305px;
			}
			#Story{
				position: absolute;
				background-size: 100% 100%;
				width: 650px;
				height: 650px;
				left: 350px;
				display: none;
			}
			.StoryText{
				width: 500px;
				height: 500px;
				margin: 80px;
				overflow: scroll;
				overflow-y: scroll;
				overflow-x: hidden;
			}
			.StoryText p{
				font-weight: bold;
				font-size: 20px;
			}#Tutorial{
				position: absolute;
				background: url("SomeWindow.PNG");
				background-size: 100% 100%;
				width: 650px;
				height: 650px;
				left: 350px;
				display: none;
			}
			.TutorialText{
				width: 500px;
				height: 500px;
				margin: 80px;
				overflow: scroll;
				overflow-y: scroll;
				overflow-x: hidden;
			}
			.TutorialText p{
				font-weight: bold;
				font-size: 20px;
			}
			.CloseButton{
				position: absolute;
				width: 30px;
				height: 30px;
				top: 20px;
				left: 600px;
				background-image: url("CloseButton.PNG");
				background-size: 100%;
			}
			.HoverStory .Story {
    			visibility: hidden;
   				width: 100px;
    			background-color:  black;
    			border-color: black;
    			border-style: solid;
    			color: #fff;
    			text-align: center;
    			border-radius: 6px;
    			padding: 5px 0;
    			position: absolute;
    			top: 270px;
    			left: 130px;
    		}	
    		.HoverStory:hover .Story {
    			visibility: visible;
			}
			.HoverTutorial .Tutorial {
    			visibility: hidden;
   				width: 100px;
    			background-color:  black;
    			border-color: black;
    			border-style: solid;
    			color: #fff;
    			text-align: center;
    			border-radius: 6px;
    			padding: 5px 0;
    			position: absolute;
    			top: 420px;
    			left: 130px;
    		}	
    		.HoverTutorial:hover .Tutorial {
    			visibility: visible;
			}
			.HoverRoles .Roles {
    			visibility: hidden;
   				width: 100px;
    			background-color:  black;
    			border-color: black;
    			border-style: solid;
    			color: #fff;
    			text-align: center;
    			border-radius: 6px;
    			padding: 5px 0;
    			position: absolute;
    			top: 560px;
    			left: 130px;
    		}	
    		.HoverRoles:hover .Roles {
    			visibility: visible;
			}
			#PlayMusic{
				position: absolute;
				border: none;
				background: url("AudioPlay.png");
				width: 50px;
				height: 50px;
				background-size: 100%;
				top: 50px;
				left: 265px;
			}
			.HoverMusic{
				cursor: pointer;
			}
			#PauseMusic{
				position: absolute;
				border: none;
				background: url("AudioPause.png");
				width: 50px;
				height: 50px;
				background-size: 100%;
				top: 50px;
				left: 330px;
			}
		</style>
	</head>
	<body background ="rsrc\img\HomepageBackground.png" id = "HomepageBackground">
		<form>
				<a href = "PartyScreen">
				<button type = "button" Value = "Play" class = "ButtonStyle" id = "PlayButton" >Play</button>
				</a>
				<button type = "button" Value = "Home" class = "ButtonStyle" id = "HomeButton">Home</button>
				<a href = "users/login">
					<img src = "rsrc\img\LogoutButton.png" Value = "Logout" id = "LogoutButton"></button>
				</a>
				<a href = "StoryPage">
				<div class = "HoverStory">
					<img src = "rsrc\img\StoryButton.png" id = "StoryButton">
					<span class = "Story">Story</span>
				</div>
				</a>
				<a href = "TutorialPage">
					<div class = "HoverTutorial">
						<img src = "rsrc\img\CustomizeButton.png" id = "TutorialButton"></button>
						<span class = "Tutorial">Tutorial</span>
					</div>
				</a>
				<div class = "HoverRoles">
				<a href = "Roles">
					<img src = "rsrc\img\LastWill.png" id = "RolesButton"></button>
					<span class = "Roles">Roles</span>
				</a>
				</div>
				<audio id="myAudio" autoplay>
  				<source src="rsrc\audio\HomepageMusic.mp3">
				</audio>
				<div class = "HoverMusic">
					<img src = "rsrc\img\AudioPlay.png" id = "PlayMusic" onclick="playAudio()" />
					<img src = "rsrc\img\AudioPause.png" id = "PauseMusic" onclick="pauseAudio()" />
				</div>
		</form>
		<img id = "advertise" src = "rsrc\img\Frame.PNG" />
		<img id = "Video" src = "rsrc\img\Frame.png" /> 
		<img id = "Profile" src = "rsrc\img\SomeWindow.PNG" />
		<img id = "LobbyIcon" src = "rsrc\img\LobbyIcon.JPG" />
		<img id = "InviteFriends" src = "rsrc\img\InviteFriends.PNG" />
		<iframe id = "Youtube" width = "405" height = "405" src = "https://www.youtube.com/embed/v6CVBQaedqM"></iframe>
		<img src = "rsrc\img\SomeWindow.png " id = "Story"/>

		<div id = "Story" />
				<button type = "button" Value = "CloseButton" class = "CloseButton"></button>
			<div class = "StoryText">
				<p>
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quis nisl mauris. Pellentesque sit amet ligula a ex pulvinar blandit. Fusce congue, nunc quis auctor iaculis, turpis ligula consequat quam, et cursus mi mauris sed sapien. Morbi mauris magna, laoreet id accumsan sit amet, pulvinar sit amet ex. Maecenas consequat eget turpis ac imperdiet. Pellentesque aliquam velit vel diam bibendum dictum. Mauris non ex ligula.
				</p>
			</div>
		</div>
		<script>
				var Audio = document.getElementById("myAudio"); 
				function playAudio() { 
    				Audio.play(); 
				} 
				function pauseAudio() { 
    				Audio.pause(); 
				}
		</script>
	</body>
</html>