<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Form Handling</title>
</head>
<body>
    <!-- <form action="result.php" method="GET">
        <label for="searchText">Search: </label>
        <input type="text" name="searchText">

        <input type="submit" value="Search">
    </form> -->

    <form action="result.php" method="POST">
        <label for="number1">Number1: </label>
        <input type="number" name="number1">

        <label for="number2">Number2: </label>
        <input type="number" name="number2">

        <input type="submit" value="Calculate SUM">
    </form>
</body>
</html>