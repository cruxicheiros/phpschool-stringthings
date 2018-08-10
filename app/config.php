<?php

use function DI\factory;
use function DI\object;
use PhpSchool\StringThings\Exercise\ConcatWorld;
use PhpSchool\StringThings\Exercise\ImplodeWorld;
use PhpSchool\StringThings\Exercise\ReverseWorld;
use PhpSchool\StringThings\Exercise\CountWords;



return [
    ConcatWorld::class => object(ConcatWorld::class),
    ImplodeWorld::class => object(ImplodeWorld::class),
    ReverseWorld::class => object(ReverseWorld::class),
    CountWords::class => object(CountWords::class),
];