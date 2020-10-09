<?php

    echo "Hello PHP! <br><br>";

# Adicionando variaveis simples
    $idade = 26;
    $nome = "Alef Bispo";
# mostrado as variaveis concatenadas
    echo "nome " . $nome . " tem a idade: " . $idade . "<br><br>";

# Adicionando valores inteiros
    $qnt_produto = 61;
    $qnt_produto = $qnt_produto - 7;
# mostrando valores com aspas duplas
     echo "quantidade atual do produto em estoque: $qnt_produto <br><br>";
    
# Adiciando valores com pento flutuante
    $saldo = 5.67;
    $depesito = 2570.52;
    $saldo +=  $depesito;
# exebindo o valor float formatado com mascara de valores em Real
# numer_format com 2 casas decimais e usando a mascara de virgura pra separar as casas decimais e o ponto pra separar os milhares
    echo "Saldo: R$" . number_format($saldo, 2, ",", ".") . "<br><br>";

# Variaveis do tipo Booleano (verdadeiro/falso)
    # declarando a variavel
    $situação = false;
    #if pra fazer o teste de verdadeiro ou falso
    if ($situação){
        # colocando cores com <span>
        echo "Situação <span style = 'color: green; '> verdadeira </span> <br><br>";
    }else{
        echo "Situação <span style = 'color: red; '> falsa </span> <br><br>";
    }
?>