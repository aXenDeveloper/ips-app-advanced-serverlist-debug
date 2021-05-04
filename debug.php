<?php
require_once str_replace('applications/axenserverlist/interface/debug.php', '', str_replace('\\', '/', __FILE__)) . 'init.php';
require_once \IPS\Application::getRootPath() . '/applications/axenserverlist/sources/GameQ/Autoloader.php';

$server = [
  'type' => 'teamspeak3',
  'host' => '54.38.143.65:9987'
];

// Query port
$server['options'] = [
  'query_port' => 10011
];

$GameQ = new \GameQ\GameQ();
$GameQ->setOption('write_wait', 10);
$GameQ->setOption('debug', true);


try {
  $GameQ->clearServers();
  $GameQ->addServer($server);

  $GameQ->setOption('timeout', 3);

  $results = $GameQ->process();
  echo '<pre>', var_dump($results), '</pre>';
} catch (\Exception $e) {
  echo $e . "\n";
}
