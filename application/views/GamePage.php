<html>
	<head>
		<script src = "rsrc\js\jquery-3.2.1.js"></script>
		<script src = "draggable_background.js"></script>
		<script>
			/* https://github.com/kentor/jquery-draggable-background */
			/*
			$(function(){
				$("").backgroundDraggable();
			});
			*/
                /* http://jsfiddle.net/wr1ua0db/17/ */
                 function startTimer(duration, display) {

                     var timer = duration, minutes, seconds;
                        setInterval(function () {

                              seconds = parseInt(timer % 60, 10);
                              seconds = seconds < 10 ? "0" + seconds : seconds;
                              $(display).html(seconds);

                              if (--timer < 0) {
                                    timer = duration;
                                    //LoadNight();
                                    
                              }
                        }, 1000);

                  }

                function LoadNight(){

                        // var xhttp = new XMLHttpRequest();
                        // xhttp.onreadystatechange = function(){
                        //     if(timer == 0){
                        //         document.getElementById("body").innerHTML = this.responseText;
                        //     }
                        // };
                        // Page.open("GET", "http://localhost/TownOfSalem/GamePageNight");
                        // Page.send();

                        window.location.href = "http://localhost/TownOfSalem/GamePageNight";     
                        

                  }

                $(document).ready(function(){


                  var FortyFive = 3;
                  display = $("#time");
                  startTimer(FortyFive, display);


                	$("#Player01").click(function(){
                		$("#Male_01").removeClass("Selected");
                		$("#Male_01").addClass("Selected");
                	});
                });

           /* Chat Scripts */
           var chats = [];
			var Chat = function(message, date) {
				this.message = message;
				this.date = date;
			};
			$(document).ready(function () {
				$("#chat_input_container").submit(function(e) {
					e.preventDefault();
					addChatItem();
				});
				$("#chat_submit").click(addChatItem());
				function addChatItem() {
					var textInput = $("#chat_input").val();
					if (textInput.trim() != "") {
						var d = new Date();
						var chatDate = d.getHours() + ":" + d.getMinutes();

						var newChat = new Chat(textInput, chatDate);
						chats.push(newChat);

						var chat_item_container = $("<div>", {"class" : "chat_item_container"});
						var chat_item = $("<div>", {"class" : "chat_item chat_item_left", id : chats.length - 1});
						$(chat_item).html(textInput + " <span></span>");

						$(chat_item_container).append(chat_item);

						$("#chat_container").append(chat_item_container);
						$(chat_item_container).hide();
						$(chat_item_container).show(500);

						scrollToBottom();
						}
				}
				$(document).on("mouseover", ".chat_item", function() {
					var dateSpan = $(this).find("span");

					var index = $(this).attr("id");
					date = chats[index].date;

					$(dateSpan).text(date);
					$(dateSpan).css({marginLeft:"10px"});
					$(dateSpan).stop().hide().show(250);
				});
				$(document).on("mouseout", ".chat_item", function() {
					var dateSpan = $(this).find("span");
					$(dateSpan).stop().hide(250, function() {
						$(dateSpan).text("");
						$(dateSpan).css({marginLeft:"0px"});
					});
				});

			});
			function scrollToBottom() {
				var height = $("#chat_container").prop("scrollHeight");
				$("#chat_container").stop().animate({scrollTop: height}, 1000);
			}
		</script>
		<style>
		.Selected{
			background-color: yellow;
			box-shadow: 0px 0px 0px yellow;
		}
		@font-face{
			font-family: blackcastle;
			src: url(BlackCastle.TTF);
		}
            body{
                  background-size: 150%;
                  width: 2000px;
                  height: 1060px;
            }
            button{
			font-family: blackcastle;
			color: yellow;
			font-size: 25px;
            }
            #time{
               font-size: 30px;
               font-weight: bold;
            }
            .HouseStyle{
            	position: absolute;
            	width: 100px;
            	height: 110px;
            }
            #HouseDay0_0{
            	position: absolute;
            	width: 100px;
            	height: 110px;
            	top: 190px;
            	left: 960px;
            }
            #HouseDay0_1{
            	position: absolute;
            	width: 110px;
            	height: 120px;
            	top: 200px;
            	left: 1105px;
            }
            #HouseDay0_2{
            	position: absolute;
            	width: 130px;
            	height: 120px;
            	top: 250px;
            	left: 1235px;
            }
            #HouseDay0_3{
            	position: absolute;
            	width: 140px;
            	height: 130px;
            	top: 320px;
            	left: 1345px;
            }
            #HouseDay0_4{
            	position: absolute;
            	width: 170px;
            	height: 150px;
            	top: 410px;
            	left: 1395px;
            }
            #HouseDay0_5{
            	position: absolute;
            	width: 190px;
            	height: 160px;
            	top: 550px;
            	left: 1380px;
            }
            #HouseDay0_6{
            	position: absolute;
            	width: 180px;
            	height: 170px;
            	top: 660px;
            	left: 1260px;
            }
            #HouseDay0_7{
            	position: absolute;
            	width: 150px;
            	height: 180px;
            	top: 730px;
            	left: 1085px;
            }
            #HouseDay0_8{
            	position: absolute;
            	width: 150px;
            	height: 180px;
            	top: 740px;
            	left: 850px;
            }
            #HouseDay0_9{
            	position: absolute;
            	width: 160px;
            	height: 190px;
            	top: 670px;
            	left: 640px;
            }
            #HouseDay0_10{
            	position: absolute;
            	width: 180px;
            	height: 170px;
            	top: 565px;
            	left: 500px;
            }
            #HouseDay0_11{
            	position: absolute;
            	width: 170px;
            	height: 150px;
            	top: 430px;
            	left: 470px;
            }
            #HouseDay0_12{
            	position: absolute;
            	width: 160px;
            	height: 150px;
            	top: 315px;
            	left: 520px;
            }
            #HouseDay0_13{
            	position: absolute;
            	width: 150px;
            	height: 140px;
            	top: 235px;
            	left: 630px;
            }
            #HouseDay0_14{
            	position: absolute;
            	width: 140px;
            	height: 130px;
            	top: 190px;
            	left: 785px;
            }
            #time{
            	position: fixed;
            	left: 1020px;
            	top: 20px;
            }
            #Graveyard{
            	position: fixed;
            	width: 250px;
            	height: 250px;
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
            #Click_Members{
            	position: fixed;
            	width: 230px;
            	height: 200px;
            	bottom: 0px;
            	right: 0px;
            }
            #ListofRoles{
            	position: fixed;
            	width: 200px;
            	height: 250px;
            	top: 40px;
            	left: 250px;
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
		#LastWillButton{
            	background: url("LastWill.png");
            	background-size: 100%;
            	border: none;
            	position: fixed;
            	width : 50px;
            	height: 50px;
            	left: 460px;
            	top: 10px;
            }
            .MaleStyle{
            	position: absolute;
            	width: 75px;
            	height: 150px;
            }
            #Male_01{
            	top: 280px;
            	left: 977px;
            }
            #Male_02{
            	width: 50px;
            	height: 90px;
            	top: 325px;
            	left: 1065px;
            }
            #Male_02_1{
            	width: 50px;
            	height: 90px;
            	top: 355px;
            	left: 1120px;
            }
            #Male_03{
            	top: 357px;
            	left: 1150px;
            }
            #Male_03_1{
            	top: 405px;
            	left: 1170px;
            }
            #Male_04{
            	top: 455px;
            	left: 1155px;
            }
            #Male_04_1{
            	top: 500px;
            	left: 1110px;
            }
            #Male_05{
            	top: 523px;
            	left: 1035px;
            }
            #Male_05_1{
            	top: 525px;
            	left: 950px;
            }
            #Male_06{
            	top: 500px;
            	left: 880px;
            }
            #Male_06_1{
            	top: 500px;
            	left: 880px;
            }
            #Male_06_2{
            	top: 465px;
            	left: 825px;
            }
            #Male_07{
            	top: 420px;
            	left: 805px;
            }
            #Male_07_1{
            	top: 370px;
            	left: 810px;
            }
            #Male_08{
            	top: 350px;
            	left: 855px;
            	width: 50px;
            	height: 90px;
            }
            #Male_08_1{
            	top: 325px;
            	left: 920px;
            	width: 50px;
            	height: 90px;
            }
            .VoteButton{
            	position: fixed;
                  background-color: #502900;
 	           	border: none;
 	           	width: 50px;
            	height: 20px;
            }
            #Player01{
            	top: 465px;
            	left: 1280px;
            }
            #Player02{
            	top: 495px;
            	left: 1280px;
            }
            #Player03{
            	top: 525px;
            	left: 1280px;
            }
            #Player04{
            	top: 555px;
            	left: 1280px;
            }
            #Player05{
            	top: 585px;
            	left: 1280px;
            }
            #Player06{
            	top: 615px;
            	left: 1280px;
            }
		.chat_item_left{
			-moz-clip-path:polygon(0% 0%, 100% 0%, 100% 75%, 20px 75%, 10px 100%, 10px 75%, 0% 75%);
			clip-path:polygon(0% 0%, 100% 0%, 100% 75%, 20px 75%, 10px 100%, 10px 75%, 0% 75%);
			-webkit-clip-path:polygon(0% 0%, 100% 0%, 100% 75%, 20px 75%, 10px 100%, 10px 75%, 0% 75%);
		}
		.chat_item{
			position: relative;
                  top: 10px;
                  left: 10px;
                  color: black;
                  display: inline-block;
                  overflow-y: auto;
                  padding: 0px 0px 0px 0px;
			}
		#chat_input{
			position: absolute;
			border: none;
			width: 505px;
                  top: -5px;
			left: -1275px;
			height: 30px;
			bottom: -130px;
                  padding: 5px 10px 5px 10px;
			}
            #chat_container{
                  border-style: solid;
                  border-color: black;
                  background-color: #A9A9A9;
                  overflow-y: auto;
                  overflow-x: hidden;
                  opacity: 0.4;
                  padding: 0px 0px 0px 5px;
                  margin: 0px 0px 0px 3px;
                  flex:8;
                  left: -1280px;
                  top: -175px;
                  height: 160px;
                  width: 500px;
                  position: absolute;
                  }
            #RolesInTown{
                  position: fixed;
                  text-align: left;
                  top: 45px;
                  left: 270px;
                  font-size: 18px;
                  color: black;            
            }    
            .Role{
                  padding-bottom: 0px;
            }
		</style>
	</head>
	<body background = "rsrc\img\TownMorning.jpg">
		<span id="time">45</span>
		<img id = "HouseDay0_0" class = "HouseStyle" src = "\rsrc\img\HouseDay0_0.PNG" />
		<img id = "HouseDay0_1" class = "HouseStyle" src = "rsrc\img\HouseDay0_1.PNG" />
		<img id = "HouseDay0_2" class = "HouseStyle" src = "rsrc\img\HouseDay0_2.PNG" />
		<img id = "HouseDay0_3" class = "HouseStyle" src = "rsrc\img\HouseDay0_3.PNG" />
		<img id = "HouseDay0_4" class = "HouseStyle" src = "rsrc\img\HouseDay0_4.PNG" />
		<img id = "HouseDay0_5" class = "HouseStyle" src = "rsrc\img\HouseDay0_5.PNG" />
		<img id = "HouseDay0_6" class = "HouseStyle" src = "rsrc\img\HouseDay0_6.PNG" />
		<img id = "HouseDay0_7" class = "HouseStyle" src = "rsrc\img\HouseDay0_7.PNG" />
		<img id = "HouseDay0_8" class = "HouseStyle" src = "rsrc\img\HouseDay0_8.PNG" />
		<img id = "HouseDay0_9" class = "HouseStyle" src = "rsrc\img\HouseDay0_9.PNG" />
		<img id = "HouseDay0_10" class = "HouseStyle" src = "rsrc\img\HouseDay0_10.PNG" />
		<img id = "HouseDay0_14" class = "HouseStyle" src = "rsrc\img\HouseDay0_14.PNG" />
		<img id = "HouseDay0_13" class = "HouseStyle" src = "rsrc\img\HouseDay0_13.PNG" />
		<img id = "HouseDay0_12" class = "HouseStyle" src = "rsrc\img\HouseDay0_12.PNG" />
		<img id = "HouseDay0_11" class = "HouseStyle" src = "rsrc\img\HouseDay0_11.PNG" />

		<img id = "Male_01" class = "MaleStyle" src = "rsrc\img\Male_01.png" />
		<img id = "Male_02_1" class = "MaleStyle" src = "rsrc\img\Male_02.png" />
		<img id = "Male_03_1" class = "MaleStyle" src = "rsrc\img\Male_03.png" />
		<img id = "Male_05" class = "MaleStyle" src = "rsrc\img\Male_05.png" />
		<img id = "Male_06" class = "MaleStyle" src = "rsrc\img\Male_06.png" />
		<img id = "Male_07_1" class = "MaleStyle" src = "rsrc\img\Male_07.png" />

		<img id = "Graveyard" src = "rsrc\img\Frame.png" />
		<img id = "RoleGuide" src = "rsrc\img\Frame.png" />
		<img id = "Click_Members" src = "rsrc\img\Frame.png" />
		<img id = "ListofRoles" src = "rsrc\img\Frame.png" />
		<button id = "NameofPlayer">Alden Bitterroot</button>
		<button id = "LastWillButton"></button>

            <button id = "Player01" class = "VoteButton"/>
            <button id = "Player02" class = "VoteButton"/>
            <button id = "Player03" class = "VoteButton"/>
            <button id = "Player04" class = "VoteButton"/>
            <button id = "Player05" class = "VoteButton"/>
            <button id = "Player06" class = "VoteButton"/>

            <div id="chat_container" class = "container">
		</div>
		<div id = "input">
			<form id="chat_input_container">
				<input type="text" id="chat_input" />
			</form>
		</div>

            <div id = "RolesInTown">
                  <p>
                        <p class = "Role">Town Protective</p>
                        <p class = "Role">Town Investigative</p>
                        <p class = "Role">Town Support</p>
                        <p class = "Role">Neutral Benign</p>
                        <p class = "Role">Neutral Killing</p>
                        <p class = "Role">Mafia Killing</p>
                  </p>
            </div>
	</body>
</html>
