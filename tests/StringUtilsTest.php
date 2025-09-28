<?php

namespace Tests;

require __DIR__ . '/../vendor/autoload.php';
use function App\capitalize;
use Webmozart\Assert\Assert;

Assert::eq(capitalize('hello'), 'Hello');

Assert::eq(capitalize(''), '');

echo 'Все тесты пройдены!';
