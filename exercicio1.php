<?php
    function repeticaoProgressiva($numLimite) {
        for ($i = 1; $i <= $numLimite; $i++) {
            for ($i2 = 1; $i2 <= $i; $i2++) { 
                print $i . " ";
            }
            $i2 = 1;
            print "\n";
        }
    }
        print "\n Insira o número limite para a contagem: ";
        $numLimite = (int) fgets(STDIN);
          print "Aqui está a sequência progressiva em cadeia...";
          print "\n";
              repeticaoProgressiva($numLimite);
          print "\n";
?>