<?php

namespace Globalis\Universign\Request;

class SEPAThirdParty extends Base
{
  protected $attributesDefinitions = array(
    'name'       => 'string',
    'address'    => 'string',
    'postalCode' => 'string',
    'city'       => 'string',
    'country'    => 'string',
  );
}
