<?php

namespace Todo\Storage;


function getTodoList(): array
{
    $path = __DIR__ . "/../Storage/storage.json";
    $content = file_get_contents($path);
    return json_decode($content, true, 512, JSON_THROW_ON_ERROR);
}

function saveTodoList(array $todoList): void
{
    $path = __DIR__ . "/../Storage/storage.json";
    $content = file_get_contents($path);
    $storageContent = json_decode($content, true, 512, JSON_THROW_ON_ERROR);
    $result = array_merge($storageContent, $todoList);
    $resultContent = json_encode($result, JSON_THROW_ON_ERROR);
    file_put_contents($path, $resultContent);
}