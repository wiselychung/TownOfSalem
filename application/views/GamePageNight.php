<html>
	<head>
		<script src = "jquery-3.2.1.js"></script>
		<script src = "draggable_background.js"></script>
		<script>
			/* https://github.com/kentor/jquery-draggable-background */
			/*
			$(function(){
				$("").backgroundDraggable();
			});
			*/
		</script>
		<style>
            body{
                  background-size: 150%;
                  width: 2000px;
                  height: 1060px;
            }
            .HouseStyle{
            	position: absolute;
            	width: 100px;
            	height: 110px;
            }
            #HouseNight0_0{
            	position: absolute;
            	width: 100px;
            	height: 110px;
            	top: 190px;
            	left: 960px;
            }
            #HouseNight0_1{
            	position: absolute;
            	width: 110px;
            	height: 120px;
            	top: 200px;
            	left: 1105px;
            }
            #HouseNight0_2{
            	position: absolute;
            	width: 130px;
            	height: 120px;
            	top: 250px;
            	left: 1235px;
            }
            #HouseNight0_3{
            	position: absolute;
            	width: 140px;
            	height: 130px;
            	top: 320px;
            	left: 1345px;
            }
            #HouseNight0_4{
            	position: absolute;
            	width: 170px;
            	height: 150px;
            	top: 410px;
            	left: 1395px;
            }
            #HouseNight0_5{
            	position: absolute;
            	width: 190px;
            	height: 160px;
            	top: 550px;
            	left: 1380px;
            }
            #HouseNight0_6{
            	position: absolute;
            	width: 180px;
            	height: 170px;
            	top: 660px;
            	left: 1260px;
            }
            #HouseNight0_7{
            	position: absolute;
            	width: 150px;
            	height: 180px;
            	top: 730px;
            	left: 1085px;
            }
            #HouseNight0_8{
            	position: absolute;
            	width: 150px;
            	height: 180px;
            	top: 740px;
            	left: 850px;
            }
            #HouseNight0_9{
            	position: absolute;
            	width: 160px;
            	height: 190px;
            	top: 670px;
            	left: 640px;
            }
            #HouseNight0_10{
            	position: absolute;
            	width: 180px;
            	height: 170px;
            	top: 565px;
            	left: 500px;
            }
            #HouseNight0_11{
            	position: absolute;
            	width: 170px;
            	height: 150px;
            	top: 430px;
            	left: 470px;
            }
            #HouseNight0_12{
            	position: absolute;
            	width: 160px;
            	height: 150px;
            	top: 315px;
            	left: 520px;
            }
            #HouseNight0_13{
            	position: absolute;
            	width: 150px;
            	height: 140px;
            	top: 235px;
            	left: 630px;
            }
            #HouseNight0_14{
            	position: absolute;
            	width: 140px;
            	height: 130px;
            	top: 190px;
            	left: 785px;
            }
            .VoteButton{
                  position: fixed;
                  background-color: #502900;
                  border: none;
                  width: 50px;
                  height: 20px;
            }
            #Player01{
                  top: 367px;
                  left: 1290px;
            }
            #Player02{
                  top: 392px;
                  left: 1290px;
            }
            #Player03{
                  top: 417px;
                  left: 1290px;
            }
            #Player04{
                  top: 442px;
                  left: 1290px;
            }
            #Player05{
                  top: 467px;
                  left: 1290px;
            }
            #Player06{
                  top: 492px;
                  left: 1290px;
            }
            #Player07{
                  top: 517px;
                  left: 1290px;
            }
            #Player08{
                  top: 542px;
                  left: 1290px;
            }
            #Player09{
                  top: 567px;
                  left: 1290px;
            }
            #Player10{
                  top: 592px;
                  left: 1290px;
            }
            #Player11{
                  top: 617px;
                  left: 1290px;
            }
            #Click_Members{
                  position: fixed;
                  width: 250px;
                  height: 300px;
                  bottom: 0px;
                  right: 0px;
            }
            #Graveyard{
                  position: fixed;
                  width: 250px;
                  height: 350px;
                  top: 40px;
                  left: 0px;
            }
            #RoleGuide{
                  position: fixed;
                  width: 250px;
                  height: 300px;
                  right: 0px;
                  top: 0px;
            }
             #NameofPlayer{
                  background-color: #502900;
                  background-size: 400px 45px;
                  position: fixed;
                  border: none;
                  top: 0px;
                  left: 0px;
                  width: 450px;
                  height: 40px;
            }    
            #ListofRoles{
                  position: fixed;
                  width: 200px;
                  height: 350px;
                  top: 40px;
                  left: 250px;
            }
            button{
                  font-family: blackcastle;
                  color: yellow;
                  font-size: 25px;
            }
		</style>
	</head>
	<body background = "rsrc\img\TownNight.jpg">
			<img id = "HouseNight0_0" class = "HouseStyle" src = "rsrc\img\HouseNight0_0.PNG" />
			<img id = "HouseNight0_1" class = "HouseStyle" src = "rsrc\img\HouseNight0_1.PNG" />
			<img id = "HouseNight0_2" class = "HouseStyle" src = "rsrc\img\HouseNight0_2.PNG" />
			<img id = "HouseNight0_3" class = "HouseStyle" src = "rsrc\img\HouseNight0_3.PNG" />
			<img id = "HouseNight0_4" class = "HouseStyle" src = "rsrc\img\HouseNight0_4.PNG" />
			<img id = "HouseNight0_5" class = "HouseStyle" src = "rsrc\img\HouseNight0_5.PNG" />
			<img id = "HouseNight0_6" class = "HouseStyle" src = "rsrc\img\HouseNight0_6.PNG" />
			<img id = "HouseNight0_7" class = "HouseStyle" src = "rsrc\img\HouseNight0_7.PNG" />
			<img id = "HouseNight0_8" class = "HouseStyle" src = "rsrc\img\HouseNight0_8.PNG" />
			<img id = "HouseNight0_9" class = "HouseStyle" src = "rsrc\img\HouseNight0_9.PNG" />
			<img id = "HouseNight0_10" class = "HouseStyle" src = "rsrc\img\HouseNight0_10.PNG" />
			<img id = "HouseNight0_14" class = "HouseStyle" src = "rsrc\img\HouseNight0_14.PNG" />
			<img id = "HouseNight0_13" class = "HouseStyle" src = "rsrc\img\HouseNight0_13.PNG" />
			<img id = "HouseNight0_12" class = "HouseStyle" src = "rsrc\img\HouseNight0_12.PNG" />
			<img id = "HouseNight0_11" class = "HouseStyle" src = "rsrc\img\HouseNight0_11.PNG" />

            <img id = "Graveyard" src = "rsrc\img\Frame.png" />
            <img id = "RoleGuide" src = "rsrc\img\Frame.png" />
            <img id = "Click_Members" src = "rsrc\img\Frame.png" />
            <img id = "ListofRoles" src = "rsrc\img\Frame.png" />

            <button id = "Player01" class = "VoteButton"/>
            <button id = "Player02" class = "VoteButton"/>
            <button id = "Player03" class = "VoteButton"/>
            <button id = "Player04" class = "VoteButton"/>
            <button id = "Player05" class = "VoteButton"/>
            <button id = "Player06" class = "VoteButton"/>
            <button id = "Player07" class = "VoteButton"/>
            <button id = "Player08" class = "VoteButton"/>
            <button id = "Player09" class = "VoteButton"/>
            <button id = "Player10" class = "VoteButton"/>
            <button id = "Player11" class = "VoteButton"/>
            <button id = "NameofPlayer">Alden Bitterroot</button>
	</body>
</html>
