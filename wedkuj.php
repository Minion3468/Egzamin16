<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styl_1.css">
    <title>Wędkowanie</title>
</head>
<body>
    <header><h3>Portal dla wędkarzy</h3></header>
    <div id="SWlewo">
        <h3>Ryby zamieszkujące rzeki</h3>
        <ol>
            <li>ooook</li>
            <li>ooooook</li>
        </ol>
    </div>
    <div id="prawo">
        <img src="ryba1.jpg" alt="Sum"><br>
        <a href="kwerendy.txt">Pobierz kwerendy</a>
    </div>
    <div id="SDlewo">
        <h3>Ryby drapieżne naszych wód</h3>
        <table>
            <tr>
                <th>L.p.</th>
                <th>Gatunek</th>
                <th>Występowanie</th>
            </tr>
        </table>
    </div>
    <footer><p>Stronę wykonał: 16</p></footer>


    <?php
    $bd = mysqli_connect('localhost','root','','wedkowanie');
    mysqli_close($bd);
    ?>

    

    
</body>
</html>