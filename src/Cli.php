<?php

namespace Todo\Cli;

use function cli\line;
use function cli\menu;
use function cli\prompt;
use function Todo\Todo\addTodo;
use function Todo\Todo\deleteTodo;
use function Todo\Todo\getTodoList;

function start(): void
{
    echo "hello\n";
}