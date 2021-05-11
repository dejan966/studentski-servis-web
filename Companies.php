<?php require_once 'Database.php';
      require_once 'Podjetja.php'; ?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Podjetja</title>
        <h1>Podjetja</h1>
    </head>
    <body>
        <table border = "1">
            <tr>
                <th>Ime</th>
                <th>Telefon</th>
                <th>Kraj</th>
            </tr>
        <?php
        $companies = Database::ReturnAllCompanies();
        foreach ($companies as $company){
            $company = explode(",", $company->_toString());
            echo '<tr>';
            echo '<td>'.$company[0].'</td>';
            echo '<td>'.$company[1].'</td>';
            echo '<td>'.$company[2].'</td>';
            echo '</tr>';
        }
        ?>
        </table>
        
        <br>
        <a href ="index.php"><button>Nazaj</button></a>
    </body>
    
</html>
