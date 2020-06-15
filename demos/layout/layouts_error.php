<?php

declare(strict_types=1);

namespace atk4\ui\demo;

require_once __DIR__ . '/../atk-init.php';

// Next line produces exception, which Agile UI will catch and display nicely.
\atk4\ui\View::addTo($app, ['foo' => 'bar']);