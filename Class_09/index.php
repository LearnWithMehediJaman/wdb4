<?php
    if(isset($_POST['submit'])){
        $number1 = $_POST['number1'];
        $number2 = $_POST['number2'];

        if($_POST['submit'] == "Add"){
            $result = $number1 + $number2;
        }

        if($_POST['submit'] == 'Sub'){
            $result = $number1 - $number2;
        }

        if($_POST['submit'] == 'Mul'){
            $result = $number1 * $number2;
        }

        if($_POST['submit'] == 'Div'){
            $result = $number1 / $number2;
        }

        echo $result;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Calculator</title>
</head>
<body>
    <form action="index.php" method="POST">
        <div>
            <label for="number1">Number 1</label>
            <input type="number" name="number1">
        </div>

        <div>
            <label for="number2">Number 2</label>
            <input type="number" name="number2">
        </div>

        <div>            
            <input type="submit" name="submit" value="Add">
            <input type="submit" name="submit" value="Sub">
            <input type="submit" name="submit" value="Mul">
            <input type="submit" name="submit" value="Div">
        </div>
    </form>
</body>
</html>