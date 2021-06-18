<?php

require_once __DIR__ . '/../src/StringUtils.php';

use function StringUtils\capitalize;

if (StringUtils\capitalize('hello') !== 'Hello') {
    throw new \Exception('Функция работает неверно!');
}

if (StringUtils\capitalize('') !== '') {
    throw new \Exception('Функция работает неаверно!');
}

echo 'Все тесты пройдены';