<?php

require __DIR__ . ("/../vendor/autoload.php");

require __DIR__ . '/../src/StringUtils.php';

use function StringUtils\capitalize;
use Webmozart\Assert\Assert;

Assert::eq(capitalize('hello'), 'Hello');
Assert::eq(capitalize(''), '');