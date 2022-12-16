<!DOCTYPE html>
<html lang="en">
<!-- Group 3, ISTE-240 -->
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/styles.css">
    <script src="assets/scripts/testVal.js"></script>
    <title>United Unix Unit - Home</title>
</head>

<body>
    <?php include "assets/phpinc/nav.php"; ?>
    </div>

<form method="get" action="levelstest.html"> 
    <fieldset class="quiz"> 
      
        <p> What was implemented during one of the first updates to the UNIX operating system?</p>
        <input type="radio" id="que1opt1" name="historyQuiz"> 
        <label for="que1opt1">Video player</label> <br>

        <input type="radio" id="que1opt2" name="historyQuiz"> 
        <label for="que1opt2"> Command-line interface </label> <br>

        <input type="radio" id="que1opt4" name="historyQuiz"> 
        <label for="que1opt4"> Text processor </label> <br>

        <input type="radio" id="que1opt3" name="historyQuiz"> 
        <label for="que1opt3"> Mp3 player </label> <br>
        <span id="que1result"></span>
    </fieldset>
    <fieldset class="quiz"> 
        
        <p> Why is process manangement important?</p>
        <input type="radio" id="que5opt1" name="ProcessManagementQuiz"> 
        <label for="que5opt1">Just Cause</label> <br>

        <input type="radio" id="que5opt3" name="ProcessManagementQuiz"> 
        <label for="que5opt3"> Process management is not important </label> <br>

        <input type="radio" id="que5opt4" name="ProcessManagementQuiz"> 
        <label for="que5opt4"> Allows you to kill unwanted processes </label> <br>

        <input type="radio" id="que5opt2" name="ProcessManagementQuiz"> 
        <label for="que5opt2"> Process management is a waste of time</label> <br>
        <span id="que5result"></span>
       
    </fieldset>
    <fieldset class="quiz"> 
   
        <p> If you change the permissions of one specific user are other users affected?</p>
        <input type="radio" id="que4opt1" name="FilePermissionsQuiz"> 
        <label for="que4opt1">Yes, because file permissions are not user specific.</label> <br>

        <input type="radio" id="que4opt4" name="FilePermissionsQuiz"> 
        <label for="que4opt4"> No, because file permissions changed for a specific user doesn't impact the other users.</label> <br>

        <input type="radio" id="que4opt3" name="FilePermissionsQuiz"> 
        <label for="que4opt3"> Yes, because you are changing the file permissions for all the users on the device. </label> <br>

        <input type="radio" id="que4opt2" name="FilePermissionsQuiz"> 
        <label for="que4opt2"> Maybe, I did not pay attention to the text above. </label> <br>
        <span id="que4result"></span>
      
    </fieldset>
    <fieldset class="quiz"> 
        
        <p>What is the command to suspend the <b>next</b> program execution?</p>
        <input type="radio" id="que3opt4" name="intermediateQuiz"> 
        <label for="que3opt4">sleep</label> <br>

        <input type="radio" id="que3opt1" name="intermediateQuiz"> 
        <label for="que3opt1"> bash </label> <br>

        <input type="radio" id="que3opt3" name="intermediateQuiz"> 
        <label for="que3opt3"> kill </label> <br>

        <input type="radio" id="que3opt2" name="intermediateQuiz"> 
        <label for="que3opt2"> awk </label> <br>

        <span id="que3result"></span>

    </fieldset>
    <fieldset class="quiz"> 
  
        <p>What is the <span style="font-style: italic;">main hub</span> of the UNIX operating system?</p>
        <input type="radio" id="que2opt1" name="elementsQuiz"> 
        <label for="que2opt1">The Shell</label> <br>

        <input type="radio" id="que2opt2" name="elementsQuiz"> 
        <label for="que2opt2"> The Hub </label> <br>

        <input type="radio" id="que2opt3" name="elementsQuiz"> 
        <label for="que2opt3"> The File System </label> <br>

        <input type="radio" id="que2opt4" name="elementsQuiz"> 
        <label for="que2opt4"> The Kernel </label> <br>

        <span id="que2result"></span>

    </fieldset>
    <fieldset class="quiz"> 
        
        <p>What is the purpose of <b>Piping</b> and <b>Output Redirection</b>?</p>
        <input type="radio" id="que6opt4" name="pipingQuiz"> 
        <label for="que6opt4">Chaining multiple commands in one line ; Redirecting command results to a file </label> <br>

        <input type="radio" id="que6opt2" name="pipingQuiz"> 
        <label for="que6opt2"> Redirecting command results to a file ; Chaining multiple commands in one line </label> <br>

        <input type="radio" id="que6opt3" name="pipingQuiz"> 
        <label for="que6opt3"> Regulating water ; Changing the direction of something </label> <br>

        <input type="radio" id="que6opt1" name="pipingQuiz"> 
        <label for="que6opt1"> These are made up terms </label> <br>

        <span id="que6result"></span>
    </fieldset>
 <input type="button" onclick="leveltestVal()" value="Check">
    <span id="ltresult"></span>
</form>

    <?php include "assets/phpinc/footer.php"; ?>

</body>
</html>
