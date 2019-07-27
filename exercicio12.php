<?php
    function embaralhandoTexto($textoDigitado) {
        $textoEmbaralhado = str_shuffle($textoDigitado);
        return $textoEmbaralhado;
    }
        print "\n Digite um texto qualquer: \n";
        $textoDigitado = (string) fgets(STDIN);
        $textoEmbaralhado = embaralhandoTexto($textoDigitado);
        print "\n Depois de embaralhado, este é seu texto: " .$textoEmbaralhado. " \n";
?>