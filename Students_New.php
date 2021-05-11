<?php require_once 'Database.php';
      require_once 'Studenti.php'; ?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Študenti</title>
        <h1>Študenti</h1>
    </head>
    <body>
        <table border = "1">
            <tr>
                <th>Ime</th>
                <th>Priimek</th>
                <th>Spol</th>
                <th>Datum rojstva</th>
                <th>Telefon</th>
                <th>Email</th>
                <th>Kraj</th>
                <th>Delovno mesto</th>
            </tr>
        <?php
        $students = Database::ReturnAllStudents();
        foreach ($students as $student){
            $student = explode(",", $student->_toString());
            echo '<tr>';
            echo '<td>'.$student[0].'</td>';
            echo '<td>'.$student[1].'</td>';
            echo '<td>'.$student[2].'</td>';
            echo '<td>'.$student[3].'</td>';
            echo '<td>'.$student[4].'</td>';
            echo '<td>'.$student[5].'</td>';
            echo '<td>'.$student[6].'</td>';
            echo '<td>'.$student[7].'</td>';
            echo '</tr>';
        }
        ?>
        </table>
        
        <br>
        <a href ="index.php"><button>Nazaj</button></a>
    </body>
</html>
