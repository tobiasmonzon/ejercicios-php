 <?php

 if($_POST){

    $ValorA=$_POST['ValorA'];
    $ValorB=$_POST['ValorB'];

    if($ValorA != $ValorB){
      
      echo "El valor de A es diferente al valor de B";
    }

 }
 
 
 ?>
 
 
 
 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores aritméticos </title>
 </head>
 <body>
    <form action="ejercicio9.php" method="post">
        Valor A:
        <input type="text" name="ValorA" id="">
        <br/>
        Valor B:
        <input type="text" name="ValorB" id="">
        <br/>
        <input type="submit" name="" id="">



    </form>

 </body>
 </html>