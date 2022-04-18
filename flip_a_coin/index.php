<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Flip a coin</title>
</head>

<body>
    <button type="button" onclick="location.reload();">Flip a coin</button>

    <?php

    function flipCoin()
    {
        $coin_sides = ['HEAD', 'TAIL'];
        $index =  array_rand($coin_sides);
        echo "RESULT : " . $coin_sides[$index];
    }

    flipCoin(); // Run function

    ?>
</body>

</html>