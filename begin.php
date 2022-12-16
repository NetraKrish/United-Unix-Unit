<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="assets/css/styles.css">
     
        <script src="assets/scripts/quizValidate.js"></script>
	    <title>United Unix Unit - Beginner</title>
    </head>

    <body>
        <?php include "assets/phpinc/nav.php"; ?>
        </div>

        <div class="filler">
        <div id="sidenavBorder"></div>
        <div id="sideback">
            <div id="sidenav">
                <div class="sideItm"> <a href="#history" class="header">UNIX History</a> </div>
                <div class="sideItm"> <a href="#main" class="header">Main Elements</a> </div>
                <div class="sideItm"> <a href="#kernel" class="content">The Kernel</a> </div>
                <div class="sideItm"> <a href="#shell" class="content">The Shell</a> </div>
                <div class="sideItm"> <a href="#file" class="content">The File System</a> </div>
                <div class="sideItm"> <a href="#signIn" class="header">Switching Users</a> </div>
                <div class="sideItm"> <a href="#signSwitch" class="content">First Steps</a> </div>
                <div class="sideItm"> <a href="#commands" class="header">Commands</a> </div>
            </div>
        </div>

        <div id="content">
        <div class="flex">
            <div id="history" class= "flexItm"> <h2>UNIX History</h2> </div>
            
            <div class="flexItm">
                <p>A team from MIT and General Electric came up with a simplified operating system in the late 1960s. While the OS did not 
                have a name at the time of its creation, the OS implemented a hierarchical file system, concepts of computer processes 
                and device files and a command-line interface. The resulting name was a pun of another OS at the time, Multics. One of 
                the first updates that UNIX had was to add a text processor that could run on a larger machine. Though this was just the 
                beginning, UNIX has continued to be updated and keeps up with updates in technology. It has also served as inspiration for 
                many following operating systems such as Linux and Mac OS. 
                </p>
            </div>

            <form method="get" action="begin.html"> 
                <fieldset class="quiz"> 
                    <h3>Unix History Quiz</h3>
                    <p> What was implemented during one of the first updates to the UNIX operating system?</p>
                    <input type="radio" id="que1opt1" name="historyQuiz"> 
                    <label for="que1opt1">Video player</label> <br>

                    <input type="radio" id="que1opt2" name="historyQuiz"> 
                    <label for="que1opt2"> Command-line interface </label> <br>

                    <input type="radio" id="que1opt4" name="historyQuiz"> 
                    <label for="que1opt4"> Text processor </label> <br>

                    <input type="radio" id="que1opt3" name="historyQuiz"> 
                    <label for="que1opt3"> Mp3 player </label> <br>

                    <input type="button" onclick="question1Validate()" value="Check">
                    <span id="que1result"></span>
                </fieldset>
            </form>

        </div>

        <div class="flex">
            <div id="main" class= "flexItm"> <h2>Main Elements</h2> </div>
            <div class="flexItm"> 
                <h3 id="kernel">The Kernel</h3>
                <p>Is the <span style="font-style: italic;">main hub</span> of the operating system, which interacts with the hardware. The kernel is also responsible for memory 
                    management, task scheduling among other things. Located at the root.
                </p>

                <h3 id="shell">The Shell</h3>
                <p>Provides the interface that the user interacts with. The shell is the interface where the user is able to run commands 
                    and programs. After the command or program is finished executing, the interface will show the output.
                </p>

                <h3 id="file">The File System</h3>
                <p>The file system is considered the central component of the operating system. UNIX uses a hierarchical file system structure. 
                    Compared to an upside down tree, the root directory is at the top of the structure and splinters out from there.
                </p>
            </div>

            <form method="get" action="begin.html"> 
                <fieldset class="quiz"> 
                    <h3>Main Elements Quiz</h3>
                    <p>What is the <span style="font-style: italic;">main hub</span> of the UNIX operating system?</p>
                    <input type="radio" id="que2opt1" name="elementsQuiz"> 
                    <label for="que2opt1">The Shell</label> <br>

                    <input type="radio" id="que2opt2" name="elementsQuiz"> 
                    <label for="que2opt2"> The Hub </label> <br>

                    <input type="radio" id="que2opt3" name="elementsQuiz"> 
                    <label for="que2opt3"> The File System </label> <br>

                    <input type="radio" id="que2opt4" name="elementsQuiz"> 
                    <label for="que2opt4"> The Kernel </label> <br>

                    <input type="button" onclick="question2Validate()" value="Check">
                    <span id="que2result"></span>

                </fieldset>
            </form>

            
        </div>

        <div class="flex">
            <div id="signIn" class= "flexItm"> <h2>Signing in and Switching Users</h2> </div>
            <div id="signSwitch" class="flexItm"> 
                <p>One of the first things you will need to do before you can start using the shell is signing in. Normally when you connect to 
                    the Unix server it will prompt you for your username and password but if you aren’t you can use the login command to start 
                    the login process. If you are accessing the server remotely you may have to login through RTP software first.
                </p>

                <p>If there is a user that didn’t log out you may need to switch users. You can check the user that is currently logged in by 
                    doing a whoami command. Once you know you are logged in as the wrong user you will need to use the su command followed by 
                    your user name to switch to your account.
                </p>
            </div>

            <form method="get" action="begin.html"> 
                <fieldset class="quiz"> 
                    <h3>Signing in and Switching Users Quiz</h3>
                    <p>What is the command to check which user you are currently logged in as?</p>
                    <input type="radio" id="que3opt1" name="UsersQuiz"> 
                    <label for="que3opt1">whatami</label> <br>

                    <input type="radio" id="que3opt4" name="UsersQuiz"> 
                    <label for="que3opt4"> whoami </label> <br>

                    <input type="radio" id="que3opt3" name="UsersQuiz"> 
                    <label for="que3opt3"> whyami </label> <br>

                    <input type="radio" id="que3opt2" name="UsersQuiz"> 
                    <label for="que3opt2"> whereami </label> <br>

                    <input type="button" onclick="question3Validate()" value="Check">
                    <span id="que3result"></span>

                </fieldset>
            </form>
        </div>

        <div class="flex">
            <div id="commands" class= "flexItm"> <h2>Commands</h2> </div>
            <div class="flexItm">
                <h3>pwd</h3>
                <p class="cmd">Print working directory</p>
                <h3>ls</h3>
                <p class="cmd"> class="cmd"Lists the names of files in the working directory</p>
                <h3>mkdir and rmdir</h3>
                <p class="cmd">Make directory and remove directory</p>
                <h3>cd</h3>
                <p class="cmd">Change directory allows you to specify what directory you want to switch to </p>
                <h3>cd ..</h3>
                <p class="cmd">Goes to the previous directory. Goes up one level</p>
                <h3>cat</h3>
                <p class="cmd">cat filename: displays content </p>
                <p class="cmd">cat > filename: creates new file</p>
                <p>cat file1 file2 > file 3: combines two files and stores content  in a new file</p>
                <h3>mv</h3>
                <p class="cmd">mv filename “new path”: moves the file</p>
                <p class="cmd">mv filename new_filename: moves content into a new file under the new name </p>
            </div>

            <form method="get" action="begin.html"> 
                <fieldset class="quiz"> 
                    <h3>Beginner Command Quiz</h3>
                    <p>What do the <b>mkdir</b> and <b>rmdir</b> commands do?</p>
                    <input type="radio" id="que4opt1" name="UsersQuiz"> 
                    <label for="que4opt1">Create a file ; Delete a file</label> <br>

                    <input type="radio" id="que4opt3" name="UsersQuiz"> 
                    <label for="que4opt3"> Delete a file ; Create a file </label> <br>

                    <input type="radio" id="que4opt4" name="UsersQuiz"> 
                    <label for="que4opt4"> Create a directory ; Delete a directory </label> <br>

                    <input type="radio" id="que4opt2" name="UsersQuiz"> 
                    <label for="que4opt2"> Delete a Directory ; Create a directory </label> <br>

                    <input type="button" onclick="question4Validate()" value="Check">
                    <span id="que4result"></span>

                </fieldset>
            </form>
            <p>
            Q. Go to the previous directory and make a new directory called "beginner" and go into the directory.
            </p>
            <div id="terminal">
                <div id="output">
                    <div class="superline"><div class="line">login as: root</div></div>
                </div>
                <div class="commandline">
                    <div class="prompt"></div>
                    <input id="input" type="text" autofocus>
                </div>
            </div>

            <input type="button" onclick="terminal1Val()" value="Check">
            <span id="terminalresult"></span>
            
            <script src="assets/scripts/terminal.js"></script>
        </div>
      
    </div>
    </div>

        <?php include "assets/phpinc/footer.php"; ?>

    </body>

</html>