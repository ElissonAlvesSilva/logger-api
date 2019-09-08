<?php declare(strict_types=1);

$namespace = 'App\Controllers';

$app->group('/logger/v1', function () use ($app, $namespace) {
  require __DIR__ . '/../validators/logger.php';

  $app->post('/accounts', $namespace. '\LoggerController:create')->add(new \DavidePastore\Slim\Validation\Validation($logger));
  $app->post('/siscad', $namespace. '\LoggerController:create')->add(new \DavidePastore\Slim\Validation\Validation($logger));
});
