<?php

function environment_label()
{
    $env = app()->environment();

    if ($env === 'production' || $env === 'live') {
        return 'Tree Data';
    }

    if ($env === 'staging' || $env === 'test') {
        return 'TEST - Tree Data V2';
    }

    return 'LOCAL - Tree Data V2';
}
