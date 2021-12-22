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
            #NameofGame{
                font-family: blackcastle;
                color: yellow;
                font-size: 70px;
            }
            #HomeButton{
                position: absolute;
                border: none;
                left: 50px;
                top: 100px;
                width: 200px;
                height: 50px;
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
            button{
                font-family: blackcastle;
                color: yellow;
                font-size: 25px;
            }
            #Category_Town{
                position: absolute;
                font-family: blackcastle;
                color: #0be50f;
                font-size: 70px;
                top: 50px;
                left: 580px;
            }
            #Category_Mafia{
                position: absolute;
                font-family: blackcastle;
                color: #f91313;
                font-size: 70px;
                top: 650px;
                left: 1035px;
            }
            #Category_Neutral{
                position: absolute;
                font-family: blackcastle;
                color: #afafaf;
                font-size: 70px;
                top: 650px;
                left: 360px;
            }
            .Frame{
                position: absolute;
                width: 320px;
                height: 380px;
                margin: 0px 0px 100px 0px;
            }
            #Frame_Investigator{
                top: 230px;
                left: 80px;
            }
            #Frame_Doctor{
                top: 230px;
                left: 520px;
            }
            #Frame_Escort{
                top: 230px;
                left: 950px;
            }
            #Frame_Mafioso{
                top: 830px;
                left: 950px;
            }
            #Frame_Survivor{
                top: 830px;
                left: 80px;
            }
            #Frame_SerialKiller{
                top: 830px;
                left: 520px;
            }
            .Icon{
                width: 70px;
                height: 70px;
            }
            #Icon_Doctor{
                position: absolute;
                top: 260px;
                left: 755px;
            }
            #Icon_Escort{
                position: absolute;
                top: 260px;
                left: 1185px;
            }
            #Icon_Investigator{
                position: absolute;
                top: 260px;
                left: 315px;
            }
            #Icon_Mafioso{
                position: absolute;
                top: 860px;
                left: 1185px;
            }
            #Icon_Survivor{
                position: absolute;
                top: 860px;
                left: 315px;
            }
            #Icon_SerialKiller{
                position: absolute;
                top: 860px;
                left: 755px;
            }
            .Attributes_Townie u{
                color: #0be50f;
            }
            .Attributes_Mafia u{
                color: #f91313;
            }
            .Attributes_Neutral u{
                color: #afafaf;
            }
            #Ability_Doctor{
                position: absolute;
                top: 270px;
                left: 540px;
            }
            #Ability_Escort{
                position: absolute;
                top: 270px;
                left: 970px;
            }
            #Ability_Investigator{
                position: absolute;
                top: 270px;
                left: 100px;
            }
            #Ability_Mafioso{
                position: absolute;
                top: 870px;
                left: 970px;
            }
            #Ability_Survivor{
                position: absolute;
                top: 870px;
                left: 100px;
            }
            #Ability_SerialKiller{
                position: absolute;
                top: 870px;
                left: 540px;
            }
        </style>
    </head>
    <body background = "rsrc\img\RolesBackground.jpg">

        <a href = "HomePage">
            <button type = "button" Value = "Home" class = "ButtonStyle" id = "HomeButton">Home</button>
        </a>
        <p id = "NameofGame">Le Ville de Salem</p>
        <p id = "Category_Town">Townies</p>
            <div id = "Role2">
                <img id = "Frame_Doctor" class = "Frame" src = "rsrc\img\Frame.PNG" />
                    <img id = "Icon_Doctor" class = "Icon" src = "rsrc\img\Roles_Doctor.PNG" />
                    <p id = "Ability_Doctor" class = "Attributes_Townie">
                        <u>Town Protective</u>
                        <br><br>
                        <strong>Abilities: </strong><br>
                        -Heals one person each night.
                        <br><br>
                        <strong>Attributes: </strong><br>
                        -You may heal yourself once.<br>
                        -You will know if your target is attacked.
                        <br><br>
                        <strong>Goals: </strong><br>
                        Lynch every criminal and evildoer.
                    </p>
            </div>
            <div id = "Role3">
                <img id = "Frame_Escort" class = "Frame" src = "rsrc\img\Frame.PNG" />
                    <img id = "Icon_Escort" class = "Icon" src = "rsrc\img\Roles_Escort.PNG" />
                    <p id = "Ability_Escort" class = "Attributes_Townie">
                        <u>Town Support</u>
                        <br><br>
                        <strong>Abilities: </strong><br>
                        -Distract someone each night.
                        <br><br>
                        <strong>Attributes: </strong><br>
                        -Distraction blocks your target from using<br> their roles night ability<br>
                        -Roleblock immunity, Roleblocking.
                        <br><br>
                        <strong>Goals: </strong><br>
                        Lynch every criminal and evildoer.
                    </p>
            </div>
            <div id = "Role4">
                <img id = "Frame_Investigator" class = "Frame" src = "rsrc\img\Frame.PNG" />
                    <img id = "Icon_Investigator" class = "Icon" src = "rsrc\img\Roles_Investigator.PNG" />
                    <p id = "Ability_Investigator" class = "Attributes_Townie">
                        <u>Town Investigate</u>
                        <br><br>
                        <strong>Abilities: </strong><br>
                        -Investigate one person each night for a clue<br> to their role.
                        <br><br>
                        <strong>Attributes: </strong><br>
                        -none
                        <br><br>
                        <strong>Goals: </strong><br>
                        Lynch every criminal and evildoer.
                    </p>
            </div>
        <p id = "Category_Mafia">Mafia</p>
            <div id = "Role24">
                <img id = "Frame_Mafioso" class = "Frame" src = "rsrc\img\Frame.PNG" />
                    <img id = "Icon_Mafioso" class = "Icon" src = "rsrc\img\Roles_Mafioso.PNG" />
                    <p id = "Ability_Mafioso" class = "Attributes_Mafia">
                        <u>Mafia Killing</u>
                        <br><br>
                        <strong>Abilities: </strong><br>
                        -Vote on someone to kill at night.
                        <br><br>
                        <strong>Attributes: </strong><br>
                        -You will carry out the Godfather's orders.<br>
                        -If the godfather is dead or did not choose<br> to kill someone, you can kill whoever<br> you want.<br>
                        -You can talk with other mafia at night.
                        <br><br>
                        <strong>Goals: </strong><br>
                        Kill anyone that will not submit to the mafia.
                    </p>
            </div>

        <p id = "Category_Neutral">Neutral</p>
            <div id = "Role26">
                <img id = "Frame_Survivor" class = "Frame" src = "rsrc\img\Frame.PNG" />
                    <img id = "Icon_Survivor" class = "Icon" src = "rsrc\img\Roles_Survivor.PNG" />
                    <p id = "Ability_Survivor" class = "Attributes_Neutral">
                        <u>Neutral Benign</u>
                        <br><br>
                        <strong>Abilities: </strong><br>
                        -Put on a bulletproof vest at night, protecting<br> yourself from attacks.
                        <br><br>
                        <strong>Attributes: </strong><br>
                        -You can only use the bulletproof vest<br> 4 times.<br>
                        -When you have a vest on you cannot die.<br>(excluding arsonist's ignite, jailor's execution,<br> jester's haunt).<br>
                        -Even if you are not attacked, your vest will<br> get destroyed.
                        <br><br>
                        <strong>Goals: </strong><br>
                        Live to the end of the game.
                    </p>
            </div>
            <div id = "Role31">
                <img id = "Frame_SerialKiller" class = "Frame" src = "rsrc\img\Frame.PNG" />
                    <img id = "Icon_SerialKiller" class = "Icon" src = "rsrc\img\Roles_SerialKiller.PNG" />
                    <p id = "Ability_SerialKiller" class = "Attributes_Neutral">
                        <u>Neutral Killing</u>
                        <br><br>
                        <strong>Abilities: </strong><br>
                        -Kill someone each night.
                        <br><br>
                        <strong>Attributes: </strong><br>
                        -If you are role blocked you will attack the<br> role blocker instead of your target. This<br> includes the escort, consort, and jailor<br>
                        -Night immunity.
                        <br><br>
                        <strong>Goals: </strong><br>
                        Kill anyone who would oppose you.
                    </p>
            </div>
    </body>
</html>