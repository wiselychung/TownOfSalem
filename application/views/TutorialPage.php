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
                background-repeat: no-repeat;
    			background-attachment: fixed;
            }
            button{
                font-family: blackcastle;
                color: yellow;
                font-size: 25px;
            }
            #HomeButton{
                position: absolute;
                border: none;
                left: 50px;
                top: 130px;
                width: 200px;
                height: 50px;
            }
            .ButtonStyle{
                position: absolute;
                border: none;
                width: 200px;
                height: 50px;
                background-color: #502900;
                box-shadow: 5px 5px 5px #191926;
            }
            .ButtonStyle:hover{
                 background-color: #461F00;
            }
            #NameofGame{
                font-family: blackcastle;
                color: yellow;
                font-size: 70px;
            }
            #GamePlayOutline{
            	position: absolute;
            	font-family: blackcastle;
                color: #e8e8e8;
                font-size: 60px;
                top: 180px;
                left: 560px;
            }
            #FirstFrame{
            	position: absolute;
            	width: 400px;
            	height: 320px;
            	top: 380px;
            	left: 100px;
            }
            #TownofSalemRoles{
            	position: absolute;
            	width: 388px;
            	height: 293px;
            	top: 400px;
            	left: 105px;
            }
            #SecondFrame{
            	position: absolute;
            	width: 400px;
            	height: 320px;
            	top: 780px;
            	left: 100px;
            }
            #NightTime{
            	position: absolute;
            	width: 388px;
            	height: 293px;
            	top: 800px;
            	left: 105px;
            }
            #ThirdFrame{
            	position: absolute;
            	width: 400px;
            	height: 320px;
            	top: 1180px;
            	left: 100px;
            	margin: 0px 0px 50px 0px;
            }
            #TheGameItself{
            	position: absolute;
            	width: 388px;
            	height: 293px;
            	top: 1200px;
            	left: 105px;
            }
            #Tutorial_Day{
            	position: absolute;
            	color: #e8e8e8;
            	font-size: 25px;
            	top: 410px;
            	left: 560px;
            	text-align: justify;
            	line-height: 150%;
            	margin: 0px 50px 0px 0px;
            }
            #Tutorial_Night{
            	position: absolute;
            	color: #e8e8e8;
            	font-size: 25px;
            	top: 820px;
            	left: 560px;
            	text-align: justify;
            	line-height: 150%;
            	margin: 0px 50px 0px 0px;
            }
            #Tutorial_Judgement{
            	position: absolute;
            	color: #e8e8e8;
            	font-size: 25px;
            	top: 1200px;
            	left: 560px;
            	text-align: justify;
            	line-height: 150%;
            	margin: 0px 50px 0px 0px;
            }
		</style>
	</head>
	<body background = "rsrc\img\RolesBackground.jpg">
		<p id = "NameofGame">Le Ville de Salem</p>
		<a href = "HomePage">
            <button type = "button" Value = "Home" class = "ButtonStyle" id = "HomeButton">Home</button>
        </a>
		<p id = "GamePlayOutline">Gameplay</p>
		<img id = "FirstFrame" src = "rsrc\img\Frame.PNG" />
		<img id = "TownofSalemRoles" src = "rsrc\img\TownofSalemRoles.PNG" />
		<img id = "SecondFrame" src = "rsrc\img\Frame.PNG" />
		<img id = "NightTime" src = "rsrc\img\TownOfSalemNight.JPG" />
		<img id = "ThirdFrame" src = "rsrc\img\Frame.PNG" />
		<img id = "TheGameItself" src = "rsrc\img\TheGameItself.PNG" />
		<p id = "Tutorial_Day">
			&emsp;&emsp;This game has 33 roles to choose from, each of which has unique abilities. Before the game starts, each player will be given a random role. When the game starts, a brief explanation of the role given to you will be provided, which includes your role's ability, attribute, affiliation and goals.
		</p>
		<p id = "Tutorial_Night">
			&emsp;&emsp;During this phase of the game, most roles use their abilities such as the serial killer, which kills one person at night dependent on the selection of the player. Further, the investigators can investigate other members of the town at night, escorts can roleblock someone at night, and the mafias can also kill other members of the town and so on.
		</p>
		<p id = "Tutorial_Judgement">
			&emsp;&emsp;During the day, all players can communicate with each other, strategically deceiving each other to achieve their goals. The town members can discuss on the things they find the night before and come up with a decision on who to lynch. When someone is now accused, that person will be given the oportunity to defend himself and plead innocence. The rest of the town then are able to choose whether to vote guilty or innocent. If the the votes weigh to the side of guilt, the accused will be lynched, otherwise, he will be set free.
		</p>
	</body>
</html>