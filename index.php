<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>ARRAYS EM PHP</title>
    </head>
    <body>
        <?php
            $vetor = array('Matheus', 'Mariazinha', 'Abel');
            print_r($vetor);
            echo '<br/>';
            echo $vetor[1];
            
            echo '<br/>';
            
            $vetor2 = array('Matheus', 'Mariazinha', 456456, 1, 'Abel', 3, 2, "Bella");
            print_r($vetor2);
            echo '<br/>';
            echo $vetor[1];
            echo '<br/>';
            
            for ($i = 0; $i < count($vetor2); $i++) {
                echo $vetor2[$i];
                echo '<br/>';
            }
            echo '<br/>Array Ordenado:<br/>';
            sort($vetor2);
            for ($i = 0; $i < count($vetor2); $i++) {
                echo $vetor2[$i];
                echo '<br/>';
            }
            echo '<br/>Array Desordenado:<br/>';
            rsort($vetor2);
            for ($i = 0; $i < count($vetor2); $i++) {
                echo $vetor2[$i];
                echo '<br/>';
            }
            echo '<br/>Array Escrito de outra forma:<br/>';
            foreach ($vetor as $value) {
                echo $value;
                echo '<br/>';
            }
            echo '<br/>';
            echo '<br/>';
            
            $vetor3 = array(7, 8, 15,'maria', 19, 'dog'=>'duke', 49, 'andrei');
            print_r($vetor3);
            
            echo '<br/>';
            echo '<br/>';
            
            $aluno = array(
                'id'=>1,
                'nome'=>'Matheus',
                'idade'=>23,
                'matricula'=>'462722345682',
                'ativo'=> true
            );
            print_r($aluno);
            
            echo '<br/>';
            echo '<br/>';
            foreach ($aluno as $key => $value) {
                echo "$key: $value<br/>";
            }
        ?>
    </body>
</html>
