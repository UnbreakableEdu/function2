<?php
    function repeticaoComplexa($numeroLimite) {
        for ($i = 1; $i <= $numeroLimite; $i++) {
            for ($i2 = 1; $i2 <= $i; $i2++) { 
                print $i2 . " ";
            }
            $i2 = 1;
            print "\n";
        }
    }
        print "\n Insira o número limite para limitar a contagem: ";
        $numeroLimite = (int) fgets(STDIN);
          print "\n Aqui está a sequência regressiva em cadeia...\n";
          print "\n";
              repeticaoComplexa($numeroLimite);
          print "\n";
?>