<?php

function urutan($n)
{
    $n = (int) $n;
    if ($n == 0) return 0;
    
    $res = array(0, 1);
    for($i=0; $i < $n; $i++)
    {
        $before = array_slice($res, -2, 2);
        array_push($res, $before[0] + $before[1]);
        if ($i == $n - 1) return $res[$n];
    }
}

if (isset($_POST['n']))
{
    echo 'Hasil: ' . urutan($_POST['n']);
}
else
{
    echo 'n: ';
    echo '<form method="post" action="">';
    echo '<input type="number" name="n">';
    echo '<input type="submit" value="Hitung">';
    echo '</form>';
}