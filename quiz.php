<?php
session_start();

if (isset($_POST['submit'])) {
  $_SESSION['answer1'] = $_POST['answer1'];
  $_SESSION['answer2'] = $_POST['answer2'];
  $_SESSION['answer3'] = $_POST['answer3'];
  $_SESSION['answer4'] = $_POST['answer4'];
  $_SESSION['answer5'] = $_POST['answer5'];
  $_SESSION['answer6'] = $_POST['answer6'];
  $_SESSION['answer7'] = $_POST['answer7'];
  $_SESSION['answer8'] = $_POST['answer8'];
  $_SESSION['answer9'] = $_POST['answer9'];
  $_SESSION['answer10'] = $_POST['answer10'];
  header("Location: result.php");
  exit;
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Quiz</title>
</head>
<body>
  <h1>Quiz</h1>
  <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <p>Question 1: Fear : Threat : : Anger : ?</p>
    <input type="radio" name="answer1" value="Compulsion"> Compulsion<br>
    <input type="radio" name="answer1" value="Panic"> Panic<br>
    <input type="radio" name="answer1" value="Provocation" required> Provocation<br>
    <input type="radio" name="answer1" value="Force"> Force<br>

    <p>Question 2: Dove : Peace : : Pearl : ?</p>
    <input type="radio" name="answer2" value="Scavenge"> Crow : Scavenge<br>
    <input type="radio" name="answer2" value="Cut"> Knife : Cut<br>
    <input type="radio" name="answer2" value="Lull"> Lull : Storm<br>
    <input type="radio" name="answer2" value="Purity" required> Purity<br>

    <p>Question 3: Happiness : Sorrow : : Comfort : ————</p>
    <input type="radio" name="answer3" value="Hardship" required> Hardship<br>
    <input type="radio" name="answer3" value="Rest"> Rest<br>
    <input type="radio" name="answer3" value="Poverty"> Poverty<br>
    <input type="radio" name="answer3" value="Difficulty"> Difficulty<br>

    <p>Question 4: Clock : Time : : Thermometer : ?</p>
    <input type="radio" name="answer4" value="Heat"> Heat<br>
    <input type="radio" name="answer4" value="Radiation"> Radiation<br>
    <input type="radio" name="answer4" value="Energy"> Energy<br>
    <input type="radio" name="answer4" value="Temperature" required> Temperature<br>

    <p>Question 5: Contamination : Food : : Infection : ?</p>
    <input type="radio" name="answer5" value="Germs"> Germs<br>
    <input type="radio" name="answer5" value="Disease"> Disease<br>
    <input type="radio" name="answer5" value="Body" required> Body<br>
    <input type="radio" name="answer5" value="Medicine"> Medicine<br>

    <p>Question 6: Arm : Elbow : : Leg :</p>
    <input type="radio" name="answer6" value="Foot" required> Foot<br>
    <input type="radio" name="answer6" value="Knee"> Knee<br>
    <input type="radio" name="answer6" value="Thigh"> Thigh<br>
    <input type="radio" name="answer6" value="Shin"> Shin<br>

    <p>Question 7: 4 : 16 : : 5 : ?</p>
    <input type="radio" name="answer7" value="21"> 21<br>
    <input type="radio" name="answer7" value="24" required> 24<br>
    <input type="radio" name="answer7" value="25"> 25<br>
    <input type="radio" name="answer7" value="26"> 26<br>

    <p>Question 8: ABD : CEF : : GIJ : ?</p>
    <input type="radio" name="answer8" value="KLM"> KLM<br>
    <input type="radio" name="answer8" value="MNO"> MNO<br>
    <input type="radio" name="answer8" value="PQR" required> PQR<br>
    <input type="radio" name="answer8" value="STU"> STU<br>

    <p>Question 9: Cat : Meow : : Dog : ?</p>
    <input type="radio" name="answer9" value="Bark" required> Bark<br>
    <input type="radio" name="answer9" value="Meow"> Meow<br>
    <input type="radio" name="answer9" value="Moo"> Moo<br>
    <input type="radio" name="answer9" value="Roar"> Roar<br>

    <p>Question 10: Abandon : Retain : : Construct : ?</p>
    <input type="radio" name="answer10" value="Build" required> Build<br>
    <input type="radio" name="answer10" value="Destroy"> Destroy<br>
    <input type="radio" name="answer10" value="Create"> Create<br>
    <input type="radio" name="answer10" value="Repair"> Repair<br>

    <br>
    <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>