<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <link type="text/css" rel="stylesheet" href="dist/css/bootstrap.min.css" />
    </head>
    <body>
        <?php include './menu/header.php'; ?>
        <section role="principale" >
            <?php include './menu/side.php'; ?>
            <div class="col-md-9" >
                <?php
                include './contenu/mainsearch.php';
                ?>
            </div>
        </section>
        <script src="dist/js/jquery.js"
        <?php include './menu/footer.php'; ?>
    </body>
</html>
