<?php
    function quantidadeCaracteres($textoPedido) {
        $qtdLetras = strlen($textoPedido);
            return $qtdLetras;
    }
    
    
    print "\n Digite uma palavra ou frase: ";
        $textoPedido = (string) trim(fgets(STDIN));
        $qtdLetras = quantidadeCaracteres($textoPedido);
        print "\n No texto digitado há um total de " . $qtdLetras . " caracteres. \n";
?>
