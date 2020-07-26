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
    </head>
    <body>
        <pre>
        <?php
        
        // put your code here
        require_once 'ContaBanco.php';
        $p1 = new ContaBanco(); //Raiany
        $p2 = new Contabanco(); //Emerson
        
        $p1->abrirConta("Conta Corrente");
        $p1->setDono("Raiany");
        
        $p2->abrirConta("Conta Poupança");
        $p2->setDono("Emerson Almeida dos Santos");
       
        $p1->depositar(600);
        $p2->depositar(1045);
        $p2->sacar(500);
        $p2->sacar(500);
        
        
        print_r($p1);
        print_r($p2);
        
        ?>
        </pre>
    </body>
</html>
