<?php require_once 'Baza.php';
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
        <title>Delovna mesta</title>
        <h1>Delovna mesta</h1>
    </head>
    <body>
        <?php
        
        $posts = Baza::ReturnAllPosts();
        foreach ($posts as $post){
            $post = explode(",", $post);
            echo $post[0];
        }
        ?>
    </body>
</html>
