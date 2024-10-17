<?php
$frases = [
"Eu te amo, eu te quero, mas assim não dá...",
"Café e amor são duas coisas que não servem frios...",
"A vida é só uma, temos que aproveitar, porque depois quando se morre nada pode se levar!"
];

if (isset($_POST['nova_frase'])){
$LIVIA = $frases[array_rand($frases)];
}else {
    $LIVIA = $frases[array_rand($frases)];
}
echo $LIVIA;