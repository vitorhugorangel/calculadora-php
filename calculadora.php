<?php

    function calculadora ($n1, $n2, $op){
        $resultado = 0;
        if (is_numeric($n1) && is_numeric($n2)){
            switch ($op){
                case '+': echo 'O resultado é: ' . $resultado = $n1 + $n2; break;
                case '-': echo 'O resultado é: ' . $resultado = $n1 - $n2; break;
                case '*': echo 'O resultado é: ' . $resultado = $n1 * $n2; break;
                case '/': echo 'O resultado é: ' . $resultado = $n1 / $n2; break;
                default: echo 'Insira um operador válido.', PHP_EOL;
            }
        } else {
            echo 'Por favor, digite um número.', PHP_EOL;
        }
    }

    function menuExibicao (){
        echo str_repeat('-', 10) . 'CALCULADORA' . str_repeat('-', 10), PHP_EOL;
        $n1 =  readline('Digite um numero: ');
        $op = readline('Digite o operador: ');
        $n2 =  readline('Digite outro numero: ');
        print_r(calculadora($n1, $n2, $op));
        echo PHP_EOL;
        echo str_repeat('-', 15) . 'FIM' . str_repeat('-', 15), PHP_EOL;
    }

    do{
        echo 'Vamos Calcular ?', PHP_EOL;
        echo str_repeat('-', 40), PHP_EOL;
        echo 'ESCOLHA UMA OPÇÃO:', PHP_EOL;
        echo '1 - Quero calcular.', PHP_EOL;
        echo '0 - Quero sair.', PHP_EOL;
        echo str_repeat( '-', 40 ), PHP_EOL;
        $opcao = readline('Digite aqui a sua opção: ');
        if ($opcao == 1) echo 'Você escolheu a opção: Quero calcular.', PHP_EOL;

        switch ($opcao){
            case '1': menuExibicao(); break;
            case '0': echo 'Você escolheu sair.', PHP_EOL; break;
        }

    } while ($opcao != 0)
    
?>