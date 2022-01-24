<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <pre>
        <?php
       require_once 'ControleAlarme.php';
       
       
       $c1 = new ControleAlarme();
       $c1 -> ligar();
       
      
       print_r($c1);
        ?>
</pre>
    </body>
</html>
