<?php

$review = [
  'title' => '',
  'author' => '',
  'status' => '未読',
  'score' => '',
  'summary' => '',
];

$errors = [];

$title = '読書ログの登録';
$content = __DIR__ . '/views/new.php';
include 'views/layout.php';
