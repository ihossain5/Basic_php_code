<?php
$name= 'Ismail';
$haredoc = <<< DOX
Hello World
What's going on \n
I am {$name}
Everything is fine 
DOX;
echo $haredoc;
echo PHP_EOL;

$nowdoc = <<<'EOT'
He is a good boy \n
I am {$name}
EOT;
echo $nowdoc;

