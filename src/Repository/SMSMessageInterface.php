<?php 
namespace Xaamin\WhatsapiLaravel\Repository;

interface SMSMessageInterface {
    public function sendMessage($to, $message);
    public function checkForNewMessages();
}
