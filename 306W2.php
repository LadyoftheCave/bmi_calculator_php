<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400..700&family=Nunito+Sans:ital,opsz,wght@0,6..12,200..1000;1,6..12,200..1000&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/bmi.css">
</head>
<body>
    <section>
        <h1>CALCULATOR</h1>
    <img src="images/Default_body_shape_made_of_vegetables_in_the_style_of_flat_com_1.jpg" alt="">
    <form action="" method="post">
        <div class="input_container">


        
<input type="text" name="leeftijd" id="leeftijd" class="form-control" placeholder="Leeftijd">

<input type="text" name="lengte" id="lengte" class="form-control" placeholder="Lengte (m)">

<input type="text" name="gewicht" id="gewicht" class="form-control" placeholder="Gewicht">

        </div>
        <button type="submit">Bereken je BMI</button>
    </form>

    <?php
// $weight = 80;
// $height = 1.80;

// $bmi = $weight / ($height * $height);

// echo $bmi;
$bmi = "";
$onderGewicht = "U hebt ondergewicht.";
$goedGewicht = "U hebt een goed gewicht.";
$matigOverGewicht = "U hebt matig overgewicht.";
$ernstigOverGewicht = "U hebt ernstig overgewicht.";
$gevaarlijkOverGewicht = "U hebt gevaarlijk overgewicht.";

if(isset($_POST['gewicht']) && isset($_POST['lengte'])) {
    $weight = $_POST['gewicht'];
    $height = $_POST['lengte'];

    $bmi = $weight / ($height * $height);
}



?>

<p>Uw BMI is <span><?php echo $bmi ?></span></p>


<?php
if ($bmi <= 16.446917573531) {
    echo "<h2 class=\"blue\">" . $onderGewicht . "</h2>";
} else if ($bmi > 16.446917573531 && $bmi < 24.670376360298) {
    echo "<h2 class=\"green\">" . $goedGewicht . "</h2>";
} else if ($bmi > 24.670376360298 && $bmi < 27.411529289220) {
    echo "<h2 class=\"yellow\">" . $matigOverGewicht . "</h2>";
} else if ($bmi > 27.411529289220 && $bmi < 38.376141004908) {
    echo "<h2 class=\"orange\">" . $ernstigOverGewicht . "</h2>";
} else if ($bmi > 41.117293933829) {
    echo "<h2 class=\"red\">" . $gevaarlijkOverGewicht . "</h2>";
}


?>


    </section>
</body>
</html>