<?php

function solution($G, $H, $Q) {
  
    $m = ceil(sqrt($Q - 1));
    $smallStep = [];
    for ($i = 0; $i < $m; $i++) {
        $smallStep[bcpowmod($G, $i, $Q)] = $i;
    }

    $bigStep = bcpowmod($G, $m, $Q);
    $bigInverse = bcpowmod($bigStep, $Q - 2, $Q);
    $current = $H;

    for ($j = 0; $j < $m; $j++) {
        if (isset($samllStep[$current]))
          return bcadd(bcmul($j, $m), $smallStep[$current]);
        $current = bcmod(bcmul($current, $bigInverse), $Q);
    }
    return null;
}

$result = solution($G, $H, $Q);

echo($result);

?>
