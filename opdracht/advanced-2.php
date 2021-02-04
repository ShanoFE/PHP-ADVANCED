<?php
function maakRij($var1, $var2){
    echo "<tr><td>";
    echo $var1;
    echo "</td><td>";
    echo $var2;
    echo "</td></tr>";
}

$ditBenIk = array(

    "naam"       => "Meshano",
    "leeftijd"   => 16,
    "muziek"     => "Hip Hop",
    "merkfiets"  => "Batavus",
    "woonplaats" => "Amsterdam",
    "eten"       => "Patat",
    "kleurogen"  => "bruin",
    "hobby"      => "Gamen",
    15           => 74,
);
?>

<head>
    <style>
        table{
            border: <?php echo  $_POST["tablerand"] ?>px solid black;
            font-family: verdana;
            
        }
        td,th{
            padding:<?php echo  $_POST["celpadding"] ?>px;
            border: 1px solid red;
        }
        body{
            background-color: <?php echo  $_POST["bgcolor"] ?>;
            color: <?php echo  $_POST["textcolor"] ?>
        }
    </style>
</head>
<body>
<table>
    <thead>
        <tr>
            <th>key</th>
            <th>value</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach($ditBenIk as $sleutel => $waarde) {

           maakRij($sleutel , $waarde);
           
        } 
        ?>
       
    </tbody>
</table>
</body>