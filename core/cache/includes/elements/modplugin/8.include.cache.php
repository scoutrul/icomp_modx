<?php
// Работаем только на фронтенде
if ($modx->event->name != 'OnHandleRequest' || $modx->context->key == 'mgr') {return;}

// Определяем запрашиваемый хост
$host = $_SERVER['HTTP_HOST'];

// Выбираем контекст с настройкой base_url
$q = $modx->newQuery('modContextSetting', array('key' => 'http_host', 'value' => $host));
$q->select('context_key');

$tstart = microtime(true);
if ($q->prepare() && $q->stmt->execute()) {
	// Учитываем наш запрос в БД
	$modx->queryTime += microtime(true) - $tstart;
	$modx->executedQueries++;
	// Получаем ключ контекста
	if ($context = $q->stmt->fetch(PDO::FETCH_COLUMN)) {
		// Web инициализируется в index.php - на него переключаться не нужно
		if ($context != 'web') {
			$modx->switchContext($context);
		}
	}
}
return;
