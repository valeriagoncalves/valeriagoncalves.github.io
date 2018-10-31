<?php
        function GeraTabela($resultado) {
                       $numeroDeLinhas = count($resultado);
                       $numeroDeColunas = count($resultado[0]);
                       echo "<table border=1>
                          <table border=1>";
                       for ($a = 0; $a < $numeroDeLinhas; $a++) {
                           echo "</tr>";
                           echo "<tr>";
                           for ($b = 0; $b < $numeroDeColunas; $b++) {
                               echo "<td> " . $resultado[$a][$b] . "</td>";
                           }
                       }

                       echo "<br>";
                   }

       $M1 = array
           (
                       array(1, 2,3),
                       array(4, 5, 6),
                       array(7, 8, 9)
                                   );

       $matriz2 = array
          (
                       array(2, 4, 6),
                       array(8,10,12),
                        array(7, 8, 9)

                   );

       function SomaMatriz($M1, $matriz2) {
                      $copia = $M1;
                       for ($a = 0; $a < 3; $a++) {
                           for ($b = 0; $b < 3; $b++) {
                              $copia[$a][$b] = $M1[$a][$b] + $matriz2[$a][$b];    
                               }
                           }

                       return $copia;

               }

                   $result = SomaMatriz($M1, $matriz2);
                    GeraTabela($result);





?>