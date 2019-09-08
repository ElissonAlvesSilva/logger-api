<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Accounts;
use App\Models\Siscad;
use stdClass;

class LoggerController extends BaseController
{
  public function create($request, $response, $args)
  {
    $this->setParams($request, $response, $args);
    $input = $this->getInput();
    
    if($request->getAttribute('has_errors')) {
      $code = 400;
      $errors = $request->getAttribute('errors');

      return $this->jsonResponse($errors, $code);
    }

    $response = new stdClass;
    $type = $this->getType($this->request->getUri()->getPath());
    switch ($type) {
      case 'accounts':
        $response = $this->accounts($input);
        break;
      case 'siscad':
        $response = $this->siscad($input);
        break;
    }
    return $this->jsonResponse($response, 200);
  }

  private function accounts($input)
  {
    $accounts = Accounts::create($input);
    return $accounts;
  }

  private function siscad($input)
  {
    $accounts = Siscad::create($input);
    return $accounts;
  }

  private function getType($param) {
    $parts = explode("/", $param);
    return end($parts);
  }
}
