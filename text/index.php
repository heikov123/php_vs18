<?php

$tekst = 'Life Is About Ignoring The Drama.';

echo strtolower($tekst);
echo '<br>';
echo strtoupper($tekst);

$tekst = 'Life Is About Ignoring The Drama.';

echo ucfirst(strtolower($tekst));

// teksti pikkus
echo '<br>';
$tekst = 'Experience is the teacher of fools';
echo strlen($tekst);			//34
echo '<br>';
echo str_word_count($tekst);	//6
echo '<br>';

// teksti kärpimine