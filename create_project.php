<?php

$content = file_get_contents(__DIR__ . '/index.php');
$content = str_replace('composer-test', 'composer-test done.', $content);
file_put_contents(__DIR__ . '/index.php', $content);
