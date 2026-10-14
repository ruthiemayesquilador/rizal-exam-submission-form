<!DOCTYPE html>
<html>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
		background-color: #29fff1;
		background-image: url('https://img.pikbest.com/wp/202344/antique-paper-texture-photo-download-vintage-background-with-an_9917195.jpg!bw700');
		background-attachment: fixed;
        background-size: cover;
		font-size: 14px;
		font-family: 'Montserrat', sans-serif; 
		margin: 0;
        }

        h1 {
            text-align: center;
            color: #0F52BA;
        }

        p {
            font-family: Times New Roman, sans-serif;
            color: #000;
            font-size: 20px;
        }

        .container {
            max-width: 700px;
            margin: 0 auto;
            padding: 10px 80px 25px;
            background: rgba(255, 255, 255, 0.9);
            border-radius: 5px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
        }

        .correct {
            color: #40eb34;
        }

        .wrong {
            color: red;
        }
        .glitch-wrapper {
    width: 100%;
    height: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
    text-align: center;
    background-color: #6B4226;
    font-family: 'Courier New', monospace; 
}

.glitch {
    position: relative;
    font-size: 80px;
    font-weight: 700;
    line-height: 1.2;
    color: #F5DEB3; 
    letter-spacing: 5px;
    z-index: 1;
}

.glitch:before,
.glitch:after {
    display: block;
    content: attr(data-glitch);
    position: absolute;
    top: 0;
    left: 0;
    opacity: 0.8;
}

.glitch:before {
    animation: glitch-color 0.3s cubic-bezier(0.25, 0.46, 0.45, 0.94) both infinite;
    color: #8B4513;
    z-index: -1;
}

.glitch:after {
    animation: glitch-color 0.3s cubic-bezier(0.25, 0.46, 0.45, 0.94) reverse both infinite;
    color: #A0522D;
    z-index: -2;
}

@keyframes glitch-color {
    0% {
        transform: translate(0);
    }
    20% {
        transform: translate(-3px, 3px);
    }
    40% {
        transform: translate(-3px, -3px);
    }
    60% {
        transform: translate(3px, 3px);
    }
    80% {
        transform: translate(3px, -3px);
    }
    to {
        transform: translate(0);
    }
}
    </style>
</head>
<body>
<div class="container">
        <div class="glitch-wrapper">
   <div class="glitch" data-glitch="Results">Results</div>
	</div>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
       
        $score = 0;
        $questions = 25;

        $correct_answers = [
            'q1' => 'a',
            'q2' => 'c',
            'q3' => 'a',
			'q4' => 'b',
			'q5' => 'a',
			'q6' => 'a',
			'q7' => 'a',
			'q8' => 'a',
			'q9' => 'b',
			'q10' => 'a',
			'q11' => 'b',
			'q12' => 'b',
			'q13' => 'c',
			'q14' => 'b',
			'q15' => 'a',
			'q16' => 'a',
			'q17' => 'b',
			'q18' => 'b',
			'q19' => 'c',
			'q20' => 'a',
			'q21' => 'c',
			'q22' => 'a',
			'q23' => 'b',
			'q24' => 'a',
            'q25' => 'c',
        ];

        for ($i = 1; $i <= $questions; $i++) {
            $question_name = 'q' . $i;
            if (isset($_POST[$question_name]) && $_POST[$question_name] == $correct_answers[$question_name]) {
                $score++;
                $feedback[$question_name] = 'Correct';
            } else {
                $feedback[$question_name] = 'Wrong';
            }
        }



        
        for ($i = 1; $i <= $questions; $i++) {
            $question_name = 'q' . $i;
            $answer = isset($_POST[$question_name]) ? $_POST[$question_name] : '';

            echo "<p>Question $i: ";
            if ($feedback[$question_name] == 'Correct') {
                echo "<span style='color: green;'>Correct</span>";
            } else {
                echo "<span style='color: red;'>Wrong</span>";
            }
            echo "<br> Your Answer: $answer <br> Correct Answer: " . $correct_answers[$question_name] . "</p>";
        }

        echo "<p>You got $score out of $questions questions correct.</p>";
    } else {
        echo "<p>Invalid request.</p>";
    }
    ?>

</div>
</body>
</html>
