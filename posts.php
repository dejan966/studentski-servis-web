<?php require_once 'Database.php';
      require_once 'DelovnaMesta.php'; ?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="style.css">
        <title>Delovna mesta</title>
        <h1>Delovna mesta</h1>
    </head>
    <body>
        <table border = "1">
            <tr>
                <th>Naziv</th>
                <th>Opis</th>
                <th>Plača</th>
                <th>Trajanje</th>
                <th>Delovnik</th>
                <th>Šifra</th>
                <th>Prosta mesta</th>
                <th>Kraj</th>
                <th>Podjetje</th>
                <th>Slika</th>
            </tr>
        
        <?php
        $posts = Database::ReturnAllPosts();
        foreach ($posts as $post){
            $post = explode(",", $post->_toString());
            echo '<tr>';
            echo '<td>'.$post[0].'</td>';
            echo '<td>'.$post[1].'</td>';
            echo '<td>'.$post[2].'</td>';
            echo '<td>'.$post[3].'</td>';
            echo '<td>'.$post[4].'</td>';
            echo '<td>'.$post[5].'</td>';
            echo '<td>'.$post[6].'</td>';
            echo '<td>'.$post[7].'</td>';
            echo '<td>'.$post[8].'</td>';
            echo '<td>'.'<img src ="'.$post[9].'" alt="random image" width="150" height="100" >'.'</td>';
            /*$a = substr(strrchr($post[9], "."), 1);
            if($a == "jpg")
                echo '<td>'.imagecreatefromjpeg($post[9]).'</td>';
            else 
                echo '<td>'.imagecreatefrompng($post[9]).'</td>';*/
            echo '</tr>';
            
        }
        ?>
        </table>
        <br>
        <a href ="index.php"><button>Nazaj</button></a>
    </body>
</html>
