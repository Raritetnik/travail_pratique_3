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
    <style>
        table{
            width:100%;
            border-collapse:collapse;
            text-align:center;
            border:1px solid #00F;
            font-size:12px;
        }
        td, tr {
            width: 20px;
            height: 20px;
            background-color: #34cceb;
        }
       th {
            background-color: #fff;
            
            
        }
    </style>
</head>
<body>
 <?php


date_default_timezone_set('Canada/Eastern');

$today = date("Y-m-d H:i:s");
echo "<h4>Aujourd'hui: ".$today."</h4><br>";

$hour = intval(date("h"));
$min = intval(date("i"));



echo "<table border='1px' cellpadding = '2'>";




for($i = 0; $i < 12; $i++)
{
    echo "<tr><th>".($i + 1);
    for($j = 0; $j < 60; $j++)
    {
        
        if(($i == ($hour - 1)) && ($j == ($min - 1)))
        {
            
            echo "<td  align='middle' style='background-color: #fff'> X </td>";
        }
        else
        {
            echo "<td></td>";
        }
            
    }
        echo "</th></tr>";
        
}










?>
</body>
</html>
