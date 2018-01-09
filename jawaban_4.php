<?php

$booking = array(
                array(1, 4),
                array(5, 6),
                array(8, 9),
                array(2, 6)
            );

function overlap($booking)
{
    $ol = 0;
    
    foreach ($booking as $key => $value)
    {
        $offset = count($booking) - ($key + 1);
        $book = array_splice($booking, $offset, count($booking));
        foreach($book as $k => $v)
        {
            if (($value[0] <= $v[0] && $value[1] >= $v[0]) || ($value[0] <= $v[1] && $value[1] >= $v[1]))
            {
                $ol++;
            }
        }
    }
    return $ol;
}

echo 'Jumlah overlap = ' . overlap($booking);
echo '<br>';
echo 'Minimal lapangan futsal yang dibutuhkan = ' . overlap($booking);