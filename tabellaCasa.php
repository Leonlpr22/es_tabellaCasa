<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="widtd=device-widtd, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>
        table {
        border-collapse: collapse;
        width: 100%;
        }

        td, th {
        border: 1px solid #dddddd;
        text-align: center;
        padding: 8px;
        }
    </style>
    
    <?php
        $metriquadri = 75.50;
        
        $prezzoMTQ = 1000;
        $prezzoTot = $prezzoMTQ * $metriquadri;
        
        $casa = array("indirizzo" => "via filarete", "metriquadri" => $metriquadri, "prezzoMTQ" => $prezzoMTQ, "prezzoTot" => $prezzoTot);

        //echo $casa["prezzoTot"];

    ?>
        
        <table>
            <tr>
            
                <th>Indirizzo</th>
                <th>Metri quadri</th>
                <th>Prezzo al metro quadro</th>
                <th>Prezzo totale</th>

            </tr>

            <tr>
    
    <?php
        foreach($casa as $valore){
            echo "<td>$valore</td>";
        }

        //echo "<td>{$casa["indirizzo"]}</td>";
        //echo "<td>{$casa["metriquadri"]}</td>";
        //echo "<td>{$casa["prezzoMTQ"]}</td>";
        //echo "<td>{$casa["prezzoTot"]}</td>";
    ?>

            </tr>
        </table>

</body>
</html>