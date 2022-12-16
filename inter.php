<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="assets/css/styles.css">
        <script src="assets/scripts/quizValidate.js"></script>
	    <title>United Unix Unit - Intermediate</title>
    </head>

    <body>
        <?php include "assets/phpinc/nav.php"; ?>
        </div>

        <div class="filler">
        <div id="sidenavBorder"></div>
        <div id="sideback">
            <div id="sidenav">
                <div class="sideItm"> <a href="#filePerm" class="header">File Permissions</a> </div>
                <div class="sideItm"> <a href="#shell" class="header">Shell Scripting</a> </div>
                <div class="sideItm"> <a href="#commands" class="header">Commands</a> </div>
            </div>
        </div> 

        <div id="content">
        <div class="flex">
            <div id="filePerm" class= "flexItm"> <h2>File Permissions</h2> </div>
            
            <div class="flexItm">
                <p>Dictates which users or groups can or cannot interact with a specified file or directory. 
                    Also dictates how these users are able to interact with the file. These permissions are mainly being able to read, write, and execute the file. 
                    <b>Read</b> allows you to view the contents of the file or directory. <b>Write</b> allows you to modify the contents of file or directory. <b>Execute</b> allows the user to run the file.
                </p>
            </div>

            <form method="get" action="inter.html"> 
                <fieldset class="quiz"> 
                    <h3>File Permissions Quiz</h3>
                    <p> If you change the permissions of one specific user are other users affected?</p>
                    <input type="radio" id="que1opt1" name="FilePermissionsQuiz"> 
                    <label for="que1opt1">Yes, because file permissions are not user specific.</label> <br>

                    <input type="radio" id="que1opt4" name="FilePermissionsQuiz"> 
                    <label for="que1opt4"> No, because file permissions changed for a specific user doesn't impact the other users.</label> <br>

                    <input type="radio" id="que1opt3" name="FilePermissionsQuiz"> 
                    <label for="que1opt3"> Yes, because you are changing the file permissions for all the users on the device. </label> <br>

                    <input type="radio" id="que1opt2" name="FilePermissionsQuiz"> 
                    <label for="que1opt2"> Maybe, I did not pay attention to the text above. </label> <br>

                    <input type="button" onclick="question1Validate()" value="Check">
                    <span id="que1result"></span>
                </fieldset>
            </form>

        </div>

        <div class="flex">
            <div id="shell" class= "flexItm"> <h2>Shell Scripting</h2> </div>
            <div class="flexItm"> 
                <p> Shells read specific configuration files and execute the given commands when loaded.
                    <b>Bourne Shell (sh)</b> is the standard shell for scripting. <b>C Shell (csh)</b> used to improve command history as well as editing commands. 
                    <b>Bourne Again Shell (bash)</b> a replacement for Bourne Shell combined with some of the C shell features. 
                </p>
                
               
            </div>

            <form method="get" action="inter.html"> 
                <fieldset class="quiz"> 
                    <h3>Shell Scripting Quiz</h3>
                    <p>Which shell/shells improves upon the Bourne shell?</p>
                    <input type="radio" id="que2opt1" name="shellsQuiz"> 
                    <label for="que2opt1">C Shell</label> <br>

                    <input type="radio" id="que2opt2" name="shellsQuiz"> 
                    <label for="que2opt2"> Bourne Again Shell </label> <br>

                    <input type="radio" id="que2opt3" name="shellsQuiz"> 
                    <label for="que2opt3"> None </label> <br>

                    <input type="radio" id="que2opt4" name="shellsQuiz"> 
                    <label for="que2opt4"> Both the C and bash Shell </label> <br>

                    <input type="button" onclick="question2Validate()" value="Check">
                    <span id="que2result"></span>

                </fieldset>
            </form>

        </div>

        <div class="flex">
            <div class= "flexItm" id="commands"> <h2>Commands</h2> </div>
            <div class="flexItm">
                <h3>ls - l</h3>
                <p class="cmd">Lists off the file permissions</p> 
                <h3>chmod +</h3>
                <p class="cmd">Adds specified permissions to file or directory </p>
                <h3>chmod -</h3>
                <p class="cmd">Removes specified permissions to file or directory</p>
                <h3>chmod =</h3>
                <p class="cmd">Sets specified permissions to file or directory</p>
                <h3>chown</h3>
                <p class="cmd">Changes owner of file or directory</p>
                <h3>chgrp </h3>
                <p class="cmd">Changes group of file or directory </p>

                <h3>echo</h3>
                <p class="cmd">Prints out provided input. Using echo followed by a $ symbol and the variable name , prints out the value of variable, else it prints the text itself</p>
                <h3>bash</h3>
                <p class="cmd">Used to execute commands</p>
                <h3>sleep</h3>
                <p class="cmd">Suspends the next program execution until the user specified time is done</p>
                <h3>read</h3>
                <p class="cmd">Takes user input and assigns it to a variable. Syntax: read followed by a variable name and in the next line the value you want to assign to the variable. You can then access it using the echo [variable name]</p>
                <!--
                    More Commands
                        man
                        Use with any command to see its documentation (how to use, options, etc) 
                        head
                        Used to filter output so only the first few lines are shown.
                        head -(number of lines) 
                        tail
                        Same as head but gets the last few lines
                        tail -(number of lines) 
                        cut
                        Used to filter out different columns in data if its formatted consistently
                        cut -f 1,3 -d ‘ ‘ 
                        This command will show only the first and third column as long as the information is separated by spaces.
                        touch
                        Updates a file’s timestamp, but as a result can be used to create a file with the specified name if it doesn't already exist.
                -->
            </div>

            <form method="get" action="inter.html"> 
                <fieldset class="quiz"> 
                    <h3>Intermediate Command Quiz</h3>
                    <p>What is the command to suspend the <b>next</b> program execution?</p>
                    <input type="radio" id="que3opt4" name="intermediateQuiz"> 
                    <label for="que3opt4">sleep</label> <br>

                    <input type="radio" id="que3opt1" name="intermediateQuiz"> 
                    <label for="que3opt1"> bash </label> <br>

                    <input type="radio" id="que3opt3" name="intermediateQuiz"> 
                    <label for="que3opt3"> kill </label> <br>

                    <input type="radio" id="que3opt2" name="intermediateQuiz"> 
                    <label for="que3opt2"> awk </label> <br>

                    <input type="button" onclick="question3Validate()" value="Check">
                    <span id="que3result"></span>

                </fieldset>
            </form>

        </div>
        <p>
        Q. Create a variable 'level' and assign it the value 'intermediate'. Then echo it. 
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

        <input type="button" onclick="terminal2Val()" value="Check">
        <span id="terminalresult2"></span>
        
        <script src="assets/scripts/terminal.js"></script>
        </div>
        </div>

        <?php include "assets/phpinc/footer.php"; ?>

    </body>

    
</html>