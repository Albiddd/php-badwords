<?php
    $text = 'Tutto lavoro e niente svago rendono Jack un ragazzo noioso.';
    $length = strlen($text);
    $w = $_GET['word'];
    $newString = str_replace($w, '***', $text, $count);
    $newLength = strlen($newString);
?>

<h2>Vecchio testo:</h2>
<p><?= $text ?></p>
<p>Il testo è lungo: <?= $length ?> caratteri.</p>

<h2>Testo censurato:</h2>
<p> <?= $newString ?> </p>
<p>Ora il testo è lungo: <?= $newLength ?> caratteri.</p>