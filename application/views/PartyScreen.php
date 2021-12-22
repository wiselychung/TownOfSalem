<html>
	<head>
		<script src = "rsrc/js/jquery-3.2.1.js"></script>
			<script>
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
				$("#chat_submit").click(addChatItem);

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
				left: 15px;
				height: 160px;
				top: 440px;
				width: 692px;
				position: absolute;
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
				width: 700px;
				left: 20px;
				height: 50px;
				padding: 5px 10px 5px 10px;
				bottom: 0px;
			}

			@font-face{
				font-family: blackcastle;
				src: url(BlackCastle.TTF);
			}
			
			button{
				font-family: blackcastle;
				color: yellow;
				font-size: 25px;
			}
			
			body{
				background-size: 1365px 662px;
				display: flex;
				flex-direction: column;
			}
			.ButtonStyle{
                background-color: #502900;
			}
			.ButtonStyle:hover{
                 background-color: #461F00;
            }
			#StartButton{
				position: absolute;
				border-style: solid;
				border-color: black;
				left: 812px;
				top: 510px;
				width: 200px;
				height: 45px;
				}
			#LeaveButton{
				position: absolute;
				border-style: solid;
				border-color: black;
				left: 812px;
				top: 557px;
				width: 200px;
				height: 45px;
				}
			#InviteButton{
				position: absolute;
				border-style: solid;
				border-color: black;
				left: 940px;
				top: 375px;
				width: 200px;
				height: 50px;
				}
			#RankButton{
				position: absolute;
				border-style: solid;
				border-color: black;
				left: 1092px;
				top: 557px;
				width: 200px;
				height: 45px;
				}
			#ClassicButton{
				position: absolute;
				border-style: solid;
				border-color: black;
				left: 1092px;
				top: 510px;
				width: 200px;
				height: 45px;
				}
			#Mode{
				position: absolute;
				width: 220px;
				height: 115px;
				top: 500px;
				left: 1080px;
			}	
			#LeaveBox{
				position: absolute;
				width: 220px;
				height: 115px;
				top: 500px;
				left: 800px;
			}		
			#Party_box{
				position: absolute;
				border: none;
				left: 20px;
				top: 20px;
				width: 700px;
				height: 400px;
			}	
			#Profile{
				position: absolute;
				width: 350px;
				height: 60px;
				top: 42px;
				left: 25px;
			}	
			#Invite_box{
				position: absolute;
				width: 600px;
				height: 458px;
				top: 15px;
				left: 750px;
			}		
			#Host{
				position: absolute;
				width: 40px;
				height: 40px;
				top: 50px;
				left: 70px;
			}	
		</style>	
	</head>	
	
	<body background ="rsrc\img\HomepageBackground.png" id = "HomepageBackground" >
		<img id = "Party_box" src = "rsrc\img\Frame.PNG" />
		<img id = "Profile" src = "rsrc\img\SomeWindow.PNG" />
		<img id = "Mode" src = "rsrc\img\SomeWindow.PNG" />
		<img id = "LeaveBox" src = "rsrc\img\SomeWindow.PNG" />
		<img id = "Invite_box" src = "rsrc\img\SomeWindow.PNG" />
		<img id = "Host" src = "rsrc\img\Roles_Sheriff.PNG" />

			<div id="chat_container" class = "container">
			</div>
			<div id = "input">
				<form id="chat_input_container">
					<input type="text" id="chat_input" />
				</form>
			</div>

		<a href = "EnterName">
			<button type = "button" Value = "Start" class = "ButtonStyle" id = "StartButton">Start</button>
		</a>
		<!-- 
		<button type = "button" Value = "Rank" class = "ButtonStyle" id = "RankButton">Rank</button>
		<button type = "button" Value = "Classic" class = "ButtonStyle" id = "ClassicButton">Classic</button>
		-->
		<button type = "button" Value = "Invite" class = "ButtonStyle" id = "InviteButton">Invite</button>
		<a href = "HomePage">
			<button type = "button" Value = "Invite" class = "ButtonStyle" id = "LeaveButton">Leave</button>
		</a>
	


	</body>
</html>	