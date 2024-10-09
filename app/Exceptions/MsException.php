<?php

namespace App\Exceptions;

use App\Services\HTTPHandlers\HttpTransaction;
use Exception;
use stdClass;

class MsException extends Exception {
    public HttpTransaction $transaction;
    public string $message;

    function prepareExceptionMessage(HttpTransaction $transaction, string $message){
        $obj = new stdClass();
        $obj->data = $transaction;
        $obj->message = $message;
        return json_encode($obj);
    }
    
}