<?php
/*
3) Dado um vetor que guarda o valor de faturamento diário de uma distribuidora, faça um programa, na linguagem que desejar, que calcule e retorne:
• O menor valor de faturamento ocorrido em um dia do mês;
• O maior valor de faturamento ocorrido em um dia do mês;
• Número de dias no mês em que o valor de faturamento diário foi superior à média mensal.

IMPORTANTE:
a) Usar o json ou xml disponível como fonte dos dados do faturamento mensal;
b) Podem existir dias sem faturamento, como nos finais de semana e feriados. Estes dias devem ser ignorados no cálculo da média;
*/

$conteudo_file = file_get_contents('dados.json');

$json = json_decode($conteudo_file, true);


$soma_media = 0;
$quantidade_media =0;
for($i = 0; $i < count($json); $i++){
    if($json[$i]['valor']){
        $soma_media += $json[$i]['valor'];
        $quantidade_media ++;
    }
}
$media = $soma_media / $quantidade_media;


$superior_media = 0;

$maior_fatu = 0;
$maior_fatu_dia = 0;

$menor_fatu = 999999999;
$menor_fatu_dia = 0;

for($i = 0; $i < count($json); $i++){
    if($json[$i]['valor'] > $maior_fatu){
        $maior_fatu = $json[$i]['valor'];
        $maior_fatu_dia = $json[$i]['dia'];
    }elseif($json[$i]['valor'] < $menor_fatu && $json[$i]['valor']){ 
        $menor_fatu = $json[$i]['valor'];
        $menor_fatu_dia = $json[$i]['dia'];
    }

    if($json[$i]['valor'] > $media){
        $superior_media++;
    }
}
echo "media ".$media."\n";
echo "O menor faturamento do mes foi ". $menor_fatu ." no dia ".$menor_fatu_dia. "\n";
echo "O maior faturamento do mes foi ". $maior_fatu ." no dia ".$maior_fatu_dia. "\n";
echo "Número de dias no mês em que o valor de faturamento diário foi superior à média mensal: ". $superior_media;

?>