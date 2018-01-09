<?php

function couples($string)
{
    $strings = str_split($string);
    $check = 0;

    foreach($strings as $key => $value)
    {
        $offset = count($strings) - ($key + 1);

        if ($value == '{')
        {
            $stringkurawal = substr($string, -$offset);
            if (!preg_match("/}/i", $stringkurawal))
            {
                return false;
            } else {
                $check++;
            }
        }

        if ($value == '[')
        {
            $stringkotak = substr($string, -$offset);
            if (!preg_match("/]/i", $stringkotak))
            {
                return false;
            } else {
                $check++;
            }
        }

        if ($value == '(')
        {
            $stringkurung = substr($string, -$offset);
            if (!preg_match("/\)/i", $stringkurung))
            {
                return false;
            } else {
                $check++;
            }
        }
    }

    if ($check > 0) {
        return true;
    }
    else
    {
        return false;
    }
}

$char = "{df][d}";
if (couples($char))
{
    echo $char . ' adalah berpasangan';
}
else
{
    echo $char . ' adalah TIDAK berpasangan';
}