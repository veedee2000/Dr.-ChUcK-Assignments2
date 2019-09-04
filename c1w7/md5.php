<pre>
<?php
echo hash('md5','aZ');
echo "\n";
$alpha = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
echo hash('md5','a'.'$alpha[4]')," ",'a'.$alpha[4];
 ?>
</pre>
