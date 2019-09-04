<html>
<head></head>
<body>
  <h1>MD5 cracker</h1>
  <p>This application can take MD5 of two-character lower case string and attempts to hash all two-character combinations to determine the original two characters.</p>
  <p><strong>DEBUG OUTPUT</strong></p>
<pre>
<?php
  if(isset($_GET['md5'])){
    $x = $_GET['md5'];
    $time_pre = microtime(true);
    $alpha = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
    // //
    for($i = 0;$i < 15;$i++){
      echo hash('md5','a'.'a'.'a'.$alpha[$i])," ",'a'.'a'.'a'.$alpha[$i],"\n";
    }
    if(strlen($x) < 1){
      echo $ans = "Not found";
    }
    else{
      $bool = TRUE;
      for($i = 0;$i < strlen($alpha);$i++){
        for($j = 0;$j < strlen($alpha);$j++){
          for($k = 0;$k < strlen($alpha);$k++){
            for($l = 0;$l < strlen($alpha);$l++){
              if(hash('md5',$alpha[$i].$alpha[$j].$alpha[$k].$alpha[$l]) == $x){
                $ans = $alpha[$i].$alpha[$j].$alpha[$k].$alpha[$l];
                $bool = FALSE;
                break;
              }
            }
          }
        }
        if(!$bool) break;
      }
      if($bool) $ans = "Not found";
      $time_post = microtime(true);
      echo "Time elapsed = ",($time_post - $time_pre),"\n";
      #echo "$ans\n\n";
    }
  }
?>
<p>Original Text : <?= htmlentities($ans); ?></p>
<form>
  <input type="text" name="md5" size="60" />
  <input type="submit" value="Run it" />
</form>
</pre>
</body>
</html>
