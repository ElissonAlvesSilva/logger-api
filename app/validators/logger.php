<?php

use Respect\Validation\Validator as v;

$logger = [
  'method' => v::notBlank(),
  'status_code' => v::notBlank(),
  'description' => v::notBlank(),
];