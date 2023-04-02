<?php
namespace KeyTask;

use KeyTask\Classes\KeyFactory;

require_once __DIR__ . '/../../vendor/autoload.php';

/**
 * Реализуем Абстрактную фабрику
 *
 * В конфигах выставляем тип получения ключа
 */

$type = "DB";

$key = (new KeyFactory())->getFactory($type)->getSecretKey()->get();

print_r($key);
