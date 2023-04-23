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

header('Content-Type: text/plain');
header('Content-Disposition: attachment; filename="quiz_results.txt"');

$text = "Complete Name: " . $name . "\n";
$text .= "Email: " . $email . "\n";
$text .= "Birthdate: " . $birthdate ."\n";
$text .= "Score: " . $score . " out of 10\n";
$text .= "Answers:\n";
$text .= "1. " . $answer1 . " (" . $q1_feedback . ")\n";
$text .= "2. " . $answer2 . " (" . $q2_feedback . ")\n";
$text .= "3. " . $answer3 . " (" . $q3_feedback . ")\n";
$text .= "4. " . $answer4 . " (" . $q4_feedback . ")\n";
$text .= "5. " . $answer5 . " (" . $q5_feedback . ")\n";
$text .= "6. " . $answer6 . " (" . $q6_feedback . ")\n";
$text .= "7. " . $answer7 . " (" . $q7_feedback . ")\n";
$text .= "8. " . $answer8 . " (" . $q8_feedback . ")\n";
$text .= "9. " . $answer9 . " (" . $q9_feedback . ")\n";
$text .= "10. " . $answer10 . " (" . $q10_feedback . ")\n";

echo $text;
?>"