<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <h1 class="bigHeading">Thanks for your order. Here it is:</h1>
    <?php
    $quantity = $_POST["quantity"];
    $coffeePrice = 0;
    for ($index0 = 0; $index0 < $quantity; $index0++) {
        echo '<div class="imgContainer">';
        $size = $_POST["size"];
        if ($size == "extraLarge"){
            $coffeePrice = 1.79;
            echo '<img src="Tim_Hortons_Images/cup.jpg" width="22%">';}
        else if ($size == "large"){
            $coffeePrice=1.99;
            echo '<img src="Tim_Hortons_Images/cup.jpg" width="17%">';}
        else{
            $coffeePrice=2.19;
            echo '<img src="Tim_Hortons_Images/cup.jpg" width="12%">';}

        if (isset($_POST["coffeeType"])) {
            $coffeeType = $_POST["coffeeType"];
            $sugar = (int)($coffeeType/10);
            $cream = $coffeeType%10;
            if ($sugar != 0) {
                echo '<img src="Tim_Hortons_Images/plus.jpg">';
                for ($index = 0; $index < $sugar; $index++) {
                    echo '<img src="Tim_Hortons_Images/sugar.jpg">';
                }
            }
            if ($cream != 0) {
                echo '<img src="Tim_Hortons_Images/plus.jpg">';
                for ($index = 0; $index < $cream; $index++) {
                    echo '<img src="Tim_Hortons_Images/cream.jpg">';
                }
            }
        } else {
            $sugar = $_POST["sugar"];
            $cream = $_POST["cream"];
            if ($sugar != 0) {
                echo '<img src="Tim_Hortons_Images/plus.jpg">';
                for ($index = 0; $index < $sugar; $index++) {
                    echo '<img src="Tim_Hortons_Images/sugar.jpg">';
                }
            }
            if ($cream != 0) {
                echo '<img src="Tim_Hortons_Images/plus.jpg">';
                for ($index = 0; $index < $cream; $index++) {
                    echo '<img src="Tim_Hortons_Images/cream.jpg">';
                }
            }
        }
        echo '</div>';
    }
    echo '<div style="margin-left: auto;margin-right: auto;width: 50%;">';
    $total = round($coffeePrice*$quantity+$coffeePrice*0.13, 2);
    echo "Cost: {$coffeePrice} x {$quantity} = \${$total}";
    echo '</div>';
    ?>
</body>

</html>