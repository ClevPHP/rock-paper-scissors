<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Rock-Paper-Scissors | ClevPHP</title>
    <style>
        .wrapper {
            width: 620px;
            max-width: 100%;
            margin: 0 auto;
        }
        .title {
            font-family: Arial, sans-serif;
        }
    </style>
</head>
<body>

    <div class="wrapper">

        <h1 class="title">Rock-Paper-Scissors-Lizard-Spock</h1>

        <p>
          Scissors cuts Paper, Paper covers Rock, Rock crushes Lizard, Lizard poisons Spock, Spock smashes Scissors, Scissors decapitates Lizard, Lizard eats Paper, Paper disproves Spock, Spock vaporizes Rock, (and as it always has) Rock crushes scissors.
        </p>

        <ul>
            <li><a href="?throw=Rock">Rock</a></li>
            <li><a href="?throw=Paper">Paper</a></li>
            <li><a href="?throw=Scissors">Scissors</a></li>
            <li><a href="?throw=Lizard">Lizard</a></li>
            <li><a href="?throw=Spock">Spock</a></li>
        </ul>

        {results_view}

    </div>

</body>
</html>
