<?php
    function revertendoTexto($textoDigitado) {
        $textoAoContrario = strrev($textoDigitado);
            return $textoAoContrario;
    }
    
    print "\n Digite um texto: ";
    $textoDigitado = (string) fgets(STDIN);
    $textoAoContrario = revertendoTexto($textoDigitado);
    print "\n Ao contrário fica assim: ".$textoAoContrario. "\n";
?>