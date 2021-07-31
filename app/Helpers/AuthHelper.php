<?php

use Illuminate\Support\Facades\Session;

function userLevel()
{
    return session('user')['level'];
}
