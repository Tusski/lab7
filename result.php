<?php
session_start();

$name = $_SESSION['name'];
$email = $_SESSION['email'];
$answer1 = $_SESSION['answer1'];
$answer2 = $_SESSION['answer2'];
$answer3 = $_SESSION['answer3'];
$answer4 = $_SESSION['answer4'];
$answer5 = $_SESSION['answer5'];
$answer6 = $_SESSION['answer6'];
$answer7 = $_SESSION['answer7'];
$answer8 = $_SESSION['answer8'];
$answer9 = $_SESSION['answer9'];
$answer10 = $_SESSION['answer10'];

$score = 0;

if($answer1 == "Provocation") {
  $score++;
  $q1_feedback = "Correct";
} else {
  $q1_feedback = "Incorrect";
}

if($answer2 == "Purity") {
  $score++;
  $q2_feedback = "Correct";
} else {
  $q2_feedback = "Incorrect";
}

if($answer3 == "Hardship") {
  $score++;
  $q3_feedback = "Correct";
} else {
  $q3_feedback = "Incorrect";
}

if($answer4 == "Temperature") {
  $score++;
  $q4_feedback = "Correct";
} else {
  $q4_feedback = "Incorrect";
}

if($answer5 == "Body") {
  $score++;
  $q5_feedback = "Correct";
} else {
  $q5_feedback = "Incorrect";
}

if($answer6 == "Foot") {
  $score++;
  $q6_feedback = "Correct";
} else {
  $q6_feedback = "Incorrect";
}

if($answer7 == "24") {
  $score++;
  $q7_feedback = "Correct";
} else {
  $q7_feedback = "Incorrect";
}

if($answer8 == "PQR") {
  $score++;
  $q8_feedback = "Correct";
} else {
  $q8_feedback = "Incorrect";
}

if($answer9 == "Bark") {
  $score++;
  $q9_feedback = "Correct";
} else {
  $q9_feedback = "Incorrect";
}

if($answer10 == "Build") {
  $score++;
  $q10_feedback = "Correct";
} else {
  $q10_feedback = "Incorrect";
}

session_destroy();
?>

<!DOCTYPE html>
<html>
<head>
  <title>Quiz Results</title>
  <style>
    .correct {
      color: blue;
    }
    .incorrect {
      color: red;
    }
    .blue-text {
      color: blue;
    }
  </style>
</head>
<body>
  <h1><b>Thank You!</b></h1>
  <p>Congratulations  <?php echo $name; ?> . <?php echo $email; ?></p>
  <p>Score: <span class="blue-text"><?php echo $score; ?></span> out of 10 items</p>

  <p>Your Answers:</p>
  <ul>
    <li>1: <?php echo $answer1; ?> - <span class="<?php echo $q1_feedback == 'Correct' ? 'correct' : 'incorrect'; ?>"><?php echo $q1_feedback; ?></span></li>
    <li>2: <?php echo $answer2; ?> - <span class="<?php echo $q2_feedback == 'Correct' ? 'correct' : 'incorrect'; ?>"><?php echo $q2_feedback; ?></span></li>
    <li>3: <?php echo $answer3; ?> - <span class="<?php echo $q3_feedback == 'Correct' ? 'correct' : 'incorrect'; ?>"><?php echo $q3_feedback; ?></span></li>
    <li>4: <?php echo $answer4; ?> - <span class="<?php echo $q4_feedback == 'Correct' ? 'correct' : 'incorrect'; ?>"><?php echo $q4_feedback; ?></span></li>
    <li>5: <?php echo $answer5; ?> - <span class="<?php echo $q5_feedback == 'Correct' ? 'correct' : 'incorrect'; ?>"><?php echo $q5_feedback; ?></span></li>
    <li>6: <?php echo $answer6; ?> - <span class="<?php echo $q6_feedback == 'Correct' ? 'correct' : 'incorrect'; ?>"><?php echo $q6_feedback; ?></span></li>
    <li>7: <?php echo $answer7; ?> - <span class="<?php echo $q7_feedback == 'Correct' ? 'correct' : 'incorrect'; ?>"><?php echo $q7_feedback; ?></span></li>
    <li>8: <?php echo $answer8; ?> - <span class="<?php echo $q8_feedback == 'Correct' ? 'correct' : 'incorrect'; ?>"><?php echo $q8_feedback; ?></span></li>
    <li>9: <?php echo $answer9; ?> - <span class="<?php echo $q9_feedback == 'Correct' ? 'correct' : 'incorrect'; ?>"><?php echo $q9_feedback; ?></span></li>
    <li>10: <?php echo $answer10; ?> - <span class="<?php echo $q10_feedback == 'Correct' ? 'correct' : 'incorrect'; ?>"><?php echo $q10_feedback; ?></span></li>

    </ul>
    <a href="download.php" download>Download Results</a>

</body>
</html>