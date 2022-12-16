<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="assets/css/styles.css">
        <script src="assets/scripts/quizValidate.js"></script>
	    <title>United Unix Unit - Advanced</title>
    </head>

    <body>
        <?php include "assets/phpinc/nav.php"; ?>
        </div>

        <div class="filler">
        <div id="sidenavBorder"></div>
        <div id="sideback">
            <div id="sidenav">
                <div class="sideItm"> <a href="#process" class="header">Process Management</a> </div>
                <div class="sideItm"> <a href="#pipe" class="header">Piping</a> </div>
                <div class="sideItm"> <a href="#out" class="header">Output Redirection</a> </div>
                <div class="sideItm"> <a href="#command" class="header">Commands</a> </div>
            </div>
        </div>

        <div id="content">
        <div class="flex">   
            <div class="flexItm">
                <h2 id="process">Process Management</h2>
                <p>Allows you to see all currently running processes. Useful for managing what processes are going on 
                    in the background of your computer slowing it down or draining battery life. Users can <b>kill</b> any unwanted processes 
                    that might be taking up memory usage or CPU power.
                </p>
            </div>

            <form method="get" action="advanced.html"> 
                <fieldset class="quiz"> 
                    <h3>Process Management Quiz</h3>
                    <p> Why is process manangement important?</p>
                    <input type="radio" id="que1opt1" name="ProcessManagementQuiz"> 
                    <label for="que1opt1">Just Cause</label> <br>

                    <input type="radio" id="que1opt3" name="ProcessManagementQuiz"> 
                    <label for="que1opt3"> Process management is not important </label> <br>

                    <input type="radio" id="que1opt4" name="ProcessManagementQuiz"> 
                    <label for="que1opt4"> Allows you to kill unwanted processes </label> <br>

                    <input type="radio" id="que1opt2" name="ProcessManagementQuiz"> 
                    <label for="que1opt2"> Process management is a waste of time</label> <br>

                    <input type="button" onclick="question1Validate()" value="Check">
                    <span id="que1result"></span>
                </fieldset>
            </form>

        </div>

        <div class="flex">
            <div class="flexItm"> 
                <h2 id="pipe">Piping</h2>
                <p>Allows users to chain multiple commands at once. This is done by using a pipe “|” in between commands. 
                </p>

                <h2 id="out">Output Redirection</h2>
                <p>Allows users to redirect the output of a command elsewhere. For example, running a command and having the output
                    redirected to a text file to save it. 
                </p>
            </div>

            
            <form method="get" action="advanced.html"> 
                <fieldset class="quiz"> 
                    <h3>Piping and Output Redirection Quiz</h3>
                    <p>What is the purpose of <b>Piping</b> and <b>Output Redirection</b>?</p>
                    <input type="radio" id="que2opt4" name="pipingQuiz"> 
                    <label for="que2opt4">Chaining multiple commands in one line ; Redirecting command results to a file </label> <br>

                    <input type="radio" id="que2opt2" name="pipingQuiz"> 
                    <label for="que2opt2"> Redirecting command results to a file ; Chaining multiple commands in one line </label> <br>

                    <input type="radio" id="que2opt3" name="pipingQuiz"> 
                    <label for="que2opt3"> Regulating water ; Changing the direction of something </label> <br>

                    <input type="radio" id="que2opt1" name="pipingQuiz"> 
                    <label for="que2opt1"> These are made up terms </label> <br>

                    <input type="button" onclick="question2Validate()" value="Check">
                    <span id="que2result"></span>

                </fieldset>
            </form>

        </div>

        <div class="flex">
            <div class= "flexItm" id="command"> <h2>Commands</h2> </div>
            <h3>ps</h3>
            <p class="cmd">Used to see all running processes</p>
            <h3>kill</h3>
            <p class="cmd">Used to end a currently running process</p>
            <h3>awk</h3>
            <p class="cmd">Used to filter output similar to the command "cut" however awk has more capabilities</p>
            <h3>sed</h3>
            <p class="cmd">Searches for lines and can be used to replace what it finds</p>
            <h3>grep</h3>
            <p class="cmd">Used to find a specified word, phrase, or character within a text</p>

            <form method="get" action="advanced.html"> 
                <fieldset class="quiz"> 
                    <h3>Advanced Command Quiz</h3>
                    <p>What is the command to suspend the <b>currently</b> running program?</p>
                    <input type="radio" id="que3opt3" name="advancedQuiz"> 
                    <label for="que3opt3">sleep</label> <br>

                    <input type="radio" id="que3opt1" name="advancedQuiz"> 
                    <label for="que3opt1"> bash </label> <br>

                    <input type="radio" id="que3opt4" name="advancedQuiz"> 
                    <label for="que3opt4"> kill </label> <br>

                    <input type="radio" id="que3opt2" name="advancedQuiz"> 
                    <label for="que3opt2"> awk </label> <br>

                    <input type="button" onclick="question3Validate()" value="Check">
                    <span id="que3result"></span>

                </fieldset>
            </form>

        </div>
        <p>
        Q. Use piping to make a directory "advanced" and get into it.
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

        <input type="button" onclick="terminal3Val()" value="Check">
        <span id="terminalresult3"></span>
        
        <script src="assets/scripts/terminal.js"></script>
        </div>
        </div>

        <?php include "assets/phpinc/footer.php"; ?>

    </body>

</html>