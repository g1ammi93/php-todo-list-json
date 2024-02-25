<?php
header('Content-Type: application/json');

$source_path = __DIR__ . '/../database/tasks.json';

$json_data = file_get_contents($source_path);

$tasks = json_decode($json_data, true);

$new_task_text = $_POST['task'] ?? '';


if($new_task_text) {
$new_task = [
    'id' => count($tasks) +1,
    'text' => $new_task_text,
    'done' => false
];

$tasks[] = $new_task;

file_put_contents($source_path, json_encode($tasks, JSON_PRETTY_PRINT));
}



echo json_encode($tasks);