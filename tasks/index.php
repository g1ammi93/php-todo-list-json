<?php

$tasks = [
    [
      "id"=> 1,
      "text"=> "HTML",
      "done"=> true
    ],
    [
      "id"=> 2,
      "text"=> "CSS",
      "done"=> true
    ],
    [
      "id"=> 3,
      "text"=> "Responsive design",
      "done"=> true
    ],
    [
      "id"=> 4,
      "text"=> "Javascript",
      "done"=> true
    ]
];

header('Content-Type: application/json');

echo json_encode($tasks);