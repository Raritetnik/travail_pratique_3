<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        td, td {
            width: 15px;
            height: 20px;
            text-align: center;
        }
        .am {
            background-color: #23AD23;
        }
        .pm {
            background-color: #AD0014;
        }
    </style>
    <title>Document</title>
</head>
<body>
    <?php
        date_default_timezone_set('Canada/Eastern');
        $date = date('m/d/Y H:i:s a', time());
        echo "L'heure actuel: " . $date;
        $heures = intval(date("h"));
        $minutes = intval(date("i"));
        $amPM = date('a');

        echo "<h4>La couleur de la case correspont à la période du jour: AM -> <span class='am'>X</span> et PM -> <span class='pm'>X</span></h4>";
        echo '<table border=1>';
        for ($i=1; $i <= 12; $i++) {
            echo '<tr>';
            for($y=1; $y <= 60; $y++) {
                if($y == $minutes && $i == $heures) {
                    if($amPM == 'pm') {
                        echo "<td class='pm'>X</td>";
                    } else {
                        echo "<td class='am'>X</td>";
                    }
                } else {
                    echo "<td style='background-color: #ccc'></td>";
                }
            }
            echo '</tr>';
        }
        echo '</table>';

    ?>
</body>
</html>