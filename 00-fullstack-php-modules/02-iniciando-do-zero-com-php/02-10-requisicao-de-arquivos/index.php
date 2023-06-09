<?php

require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName('02.10 - Requisição de arquivos');

/*
 * [ include ] https://php.net/manual/pt_BR/function.include.php
 * [ include_once ] https://php.net/manual/pt_BR/function.include-once.php
 */
fullStackPHPClassSession('include, include_once', __LINE__);

// include 'header.php';
include __DIR__ . '/header.php';

$profile = new StdClass();

$profile->name = 'isaac';
$profile->company = 'assist';
$profile->email = 'isaac@gmail';

include __DIR__ . '/profile.php';

$profile = new StdClass();

$profile->name = 'gustavo';
$profile->company = 'assist';
$profile->email = 'gustavo@gmail';


include __DIR__ . '/profile.php';

/*
 * [ require ] https://php.net/manual/pt_BR/function.require.php
 * [ require_once ] https://php.net/manual/pt_BR/function.require-once.php
 */
fullStackPHPClassSession('require, require_once', __LINE__);

require __DIR__ . '/config.php';

echo '<h1>' . COURSE . '</h1>';
