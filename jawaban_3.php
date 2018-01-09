<?php

function someTest()
{
    $error = _OK;

    if (!isSuccess(doProcess1())) $error = _PROCESS1FAILED;
    
    if (!isSuccess(doProcess2())) $error = _PROCESS2FAILED;
    
    if (!isSuccess(doProcess3())) $error = _PROCESS3FAILED;
    
    if (!isSuccess(doProcess4())) $error = _PROCESS4FAILED;

    return $error;
}