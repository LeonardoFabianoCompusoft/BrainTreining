<?php

/**
 * Estrutura de Controles
 * IF, Switch, Match
 * TODO: Crie três variáveis, $autorizado, $admin e $nome. Avalie se a variável $autorizado 
 * for igual a verdadeiro e $admin igual a verdadeiro escreva na tela se for verdadeiro: 
 * "Área Administrativa, $nome, Bem vindo!"
 */

/////////////////////////////////////////////////////////
// Declaração das variáveis de autorização e nome
$autorizado = true;   // Variável que define se o usuário está autorizado
$admin = true;        // Variável que define se o usuário é administrador
$nome = "Glaucio Daniel";  // Nome do usuário

// Verificação de autorização e administrador
if ($autorizado == true && $admin == true) {
    // Caso as duas condições sejam verdadeiras, exibe mensagem de boas-vindas
    echo "Área Administrativa: $nome, Bem vindo! <br/><br/>";
}
/////////////////////////////////////////////////////////

/**
 * TODO: Crie quatro variáveis, $quantidade, $valorUnitario, $subtotal e $frete.
 * A variável $subtotal receberá $quantidade multiplicado por $valorUnitario. Se o cliente comprar 
 * acima de 3 unidades, aplique um desconto de 10% do valor da compra. Caso contrário, aplique 
 * um desconto de 5%. Em seguida, será somado o valor de frete ao subtotal. 
 * Para a massa de teste utilize: $quantidade= 2; $valorUnitario = 1200.00; $frete = 40.00
 */

// Declaração das variáveis de compra
$quantidade = 2;  // Quantidade de produtos comprados
$valorUnitario = 1200.00;  // Valor unitário do produto
$frete = 40.00;   // Valor do frete

// Calculando o subtotal (quantidade * valorUnitario)
$subtotal = ($quantidade * $valorUnitario);

// Aplica desconto conforme a quantidade comprada
if ($quantidade > 3) {
    // Se a quantidade for maior que 3, aplica 10% de desconto
    $subtotal *= (1 - 0.10);
} else {
    // Se a quantidade for 3 ou menos, aplica 5% de desconto
    $subtotal *= (1 - 0.05);
}

// Somando o valor do frete ao subtotal
$subtotal += $frete;

// Exibindo o valor final após descontos e frete
var_dump($subtotal);  // Exibe o valor final do subtotal
echo "<br/><br/>";

/**
 * Loops e Contadores
 * TODO: Crie um Contador para ir de 1920 a 2022. 
 * Este contador precisa armazenar uma instrução HTML dentro de uma variável string $option 
 * com a seguinte estrutura: '<option value="$valor">$valor</option>'.
 * TODO: Crie uma condição dentro deste contador, se o $ano for igual a 2021 imprima o atributo selected.
 */

echo "<select>";  // Inicia a tag <select> para as opções de ano
for ($ano = 1920; $ano <= 2022; $ano++) {
    // Para cada ano de 1920 até 2022, cria uma opção
    echo "<option value='$ano' " . ($ano == 2021 ? "selected='selected'" : "") . ">$ano</option>";
    // Se o ano for 2021, o atributo 'selected' será adicionado à opção
}
echo "</select>";  // Fecha a tag <select>

/**
 * require e include
 * TODO: Crie um arquivo chamado exercicio-03-a.php declarando duas constantes 
 * IDIOMA = "pt_BR"; LOCALE = "America/Sao_Paulo";
 * TODO: Crie um arquivo chamado exercicio-03-b.php incluindo de forma obrigatório o arquivo anterior, 
 * e crie uma condição, para caso o IDIOMA seja "pt_BR" e o LOCALE seja "America/Sao_Paulo", 
 * imprima na tela: Idioma: Português, Fuso Horário: -3:00
 */

// **Comentário adicional para o exercício de require/include:**
// Esses dois arquivos precisam ser criados separadamente, 
// um contendo as constantes e o outro incluindo e verificando a condição para imprimir o idioma e fuso horário.

// Aqui você deve usar `require_once` ou `include_once` para garantir que o arquivo `exercicio-03-a.php` seja incluído corretamente.

?>
