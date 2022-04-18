<?php session_start()?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../css/quiz.css">
</head>
<body>
    <h1 id="title">Today's Quiz</h1>

    <!-- quiz-container -->
    <div id="quiz-container">
        <!-- question container -->
        <div class="questions">
            <h2 id="question"></h2>
            <ol type="A">
                <li class="option"><span id="option0" onclick="calcScore(this)"></span></li>
                <li class="option"><span id="option1" onclick="calcScore(this)"></span></li>
                <li class="option"><span id="option2" onclick="calcScore(this)"></span></li>
                <li class="option"><span id="option3" onclick="calcScore(this)"></span></li>
            </ol>
            <h4 id="stat"></h4>
        </div>

        <div class="buttons">
            <button type="button" class="next">Next</button>
        </div>

    </div>

    <!-- scoreboard section -->
    <div id="scoreboard">
        
        <h2 id="score-title">Your Score</h2>
        <h2 id="score"></h2>
        <button type="button" id="score-btn" onclick="backToQuiz()">Back to Quiz</button>
        <button type="button" id="check-answer" onclick="checkAnswer()">Check Answers</button>
    </div>

    <!-- answers section -->
    <div id="answerBank">
        <h2>Answers :</h2>
        <ol type="1" id="answers">

        </ol>
        <button type="button" id="score-btn" onclick="backToQuiz()">Back to Quiz</button>
    </div>
    
        
    <script src="quiz.js"></script>
    <script>
        var json=eval(<?php echo $_SESSION["resultado"]?>)
        displayQuestion2(json)
    </script>
</body>
</html>