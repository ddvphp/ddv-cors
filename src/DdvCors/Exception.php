<?php

namespace DdvPhp\DdvCors;

class Exception extends \DdvPhp\DdvException\Error
{
  // 魔术方法
  public function __construct( $message = 'Cors Error', $errorId = 'CORS_ERROR' , $code = '403', $errorData = array() )
  {
    parent::__construct( $message , $errorId , $code, $errorData );
  }
}