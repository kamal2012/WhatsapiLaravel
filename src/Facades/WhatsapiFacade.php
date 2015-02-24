<?php 
namespace Xaamin\WhatsapiLaravel\Facades;

use Illuminate\Support\Facades\Facade;

class WhatsapiFacade extends Facade {

    protected static function getFacadeAccessor()
    {
        return 'Xaamin\WhatsapiLaravel\Repository\SMSMessageInterface';
    }
}