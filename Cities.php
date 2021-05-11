<?php require_once 'Database.php';
      require_once 'Kraji.php'; ?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Kraji</title>
        <h1>Kraji</h1>
    </head>
    <body>
        <table border = "1">
            <tr>
                <th>Ime</th>
                <th>Pošta</th>
                <th>Število delavnih mest</th>
                <th>Število študentov</th>
            </tr>
        <?php
        $cities = Database::ReturnAllCities();
        foreach ($cities as $city){
            $city = explode(",", $city->_toString());
            echo '<tr>';
            echo '<td>'.$city[0].'</td>';
            echo '<td>'.$city[1].'</td>';
            echo '<td>'.$city[2].'</td>';
            echo '<td>'.$city[3].'</td>';
            echo '</tr>';
        }
        ?>
        </table>
        
        <br>
        <a href ="index.php"><button>Nazaj</button></a>
    </body>
</html>
