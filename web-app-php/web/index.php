<?php
    $srv = $_SERVER;

    $cities = [
        "Burgas" => 203017, 
        "Dobrich" => 86292,
        "Pleven" => 99628, 
        "Plovdiv" => 341625,
        "Ruse" => 145765, 
        "Sliven" => 87895, 
        "Sofia" => 1307376,
        "Stara Zagora" => 148443,
        "Varna" => 334466,
        "Veliko Tarnovo" => 73508
    ];

    arsort($cities);
?>
<html>
    <head>
        <title>Top cities in Bulgaria</title>
    </head>
    <body>
        <h3>Top cities in Bulgaria</h3>
        <br />
        <table>
<?php
    foreach ($cities as $c => $p) {
        print "<tr>\n";
        print "<td>$c</td>\n";
        print "<td>$p</td>\n";
        print "</tr>\n";
    }
?>
        </table>
        <br /><br /><br />
        Running on <b><?php echo gethostname(); ?></b>
    </body>
</html>