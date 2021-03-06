<?php

/*
 * This file is part of server timing middleware
 *
 * Copyright (c) 2017 Mika Tuupola
 *
 * Licensed under the MIT license:
 *   http://www.opensource.org/licenses/mit-license.php
 *
 * See also:
 *   https://github.com/tuupola/server-timing-middleware
 *   https://w3c.github.io/server-timing/
 *
 */

namespace Tuupola\Middleware\ServerTiming;

use Closure;
use Symfony\Component\Stopwatch\Stopwatch as SymfonyStopWatch;

interface StopwatchInterface
{
    public function start($key): StopwatchInterface;

    public function stop($key): StopwatchInterface;

    public function stopAll(): StopwatchInterface;

    public function closure($key, Closure $function = null);

    public function set($key, $value = null): StopwatchInterface;

    public function get($key): ?int;

    public function stopwatch(): SymfonyStopWatch;

    public function memory(): ?int;

    public function values(): array;
}
