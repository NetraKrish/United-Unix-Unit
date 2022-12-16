<!DOCTYPE html>
<html lang="en">
<!-- Group 3, ISTE-240 -->
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/styles.css">
    <script src="https://kit.fontawesome.com/ecc565d7f7.js" crossorigin="anonymous"></script>
    <title>United Unix Unit - Home</title>
</head>

<body>
    <?php include "assets/phpinc/nav.php"; ?>

    <!--Level Test-->
    
    <!-- end of main navigation -->

    <!--hero image-->   
    <div class="hero">
        <div class="hero-inner">
            <h1>UNIX </h1>
            <h2>A personalized UNIX guide</h2>
            <a href="levelstest.php" class="btn">Get Started</a>
        </div>
    </div>
    </div>
    <!-- end of nesting -->

    <div class="leveltest">
        <div class="ltItem" id="leveltext"><p>How much do you already know?</p></div>
        <div class="ltItem"><a href="levelstest.php">Find out</a></div>
    </div>

    <!--Navigate to different levels-->
    <div class = levels>
        <a href ="begin.php"> <div class="levels-inner"> Begginer </div></a>
        <a href="inter.php"><div class="levels-inner"> Intermediate </div></a>
        <a href="advanced.php"> <div class="levels-inner">Advanced</div> </a>
    </div>

    <div class="intro">
        United UNIX Unit is dedicated to creating engaging content that is accommodating to all levels of learners. A unique and interactive 
        experience to keep new and returning users engaged with the content. There are quizzes to see exactly where you stand before and after 
        reviewing the content. Users will feel they have learned something new every time they read through the content or experience 
        the interactive quizzes and examples. 
    </div>
    <!-- end of nav levels -->

    <!-- start of the review section -->
    <div class = "reviews">
        <div class="reviews-inner">
            <div class="reviewItem"> <img src="./assets/images/persona1.jpg" alt="Image of a someone who left a review"> </div>
            <div class="reviewItem">rating:<i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i> </div>
            <div class="reviewItem">Excellent site! I was looking for resources that I can use to teach and explain UNIX to beginners.</div>
        </div>

        <div class="reviews-inner">
            <div class="reviewItem"> <img src="./assets/images/persona2.jpg" alt="Image of a someone who left a review"> </div>
            <div class="reviewItem">rating: <i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i></div>
            <div class="reviewItem">I was lost jumping into my intro programming class this semester and this website has been a life saver! </div>
        </div>

        <div class="reviews-inner">
            <div class="reviewItem"> <img src="./assets/images/persona3.jpg" alt="Image of a someone who left a review"> </div>
            <div class="reviewItem">rating:<i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i></div>
            <div class="reviewItem">This site is amazing. Came here looking for clarification and that's exactly what I got. I'll definitely share friends.</div>
        </div>

    </div>
    <!-- end of the review section -->

    <!-- insert feedback form here -->
    <div class="feedback">
        <div class="form">
        <h3>Have feedback you'd like to share?</h3>
        <form action="form.php" method="get">
            <div class="formItem">
                Name:
                <input type="text" id="namein" name="name" size="30" >
            </div>
            <div class="formItem">
                <textarea id="feedin" name="feed" placeholder="Add your feedback..." maxlength="100"></textarea>
            </div>
            <div class="formItem">
                <input type="submit" value="submit" >
            </div>	
        </form>
        </div>

        <!-- display feedback -->
        <div class="display"></div>

    </div>

    <?php include "assets/phpinc/footer.php"; ?>

</body>



</html>