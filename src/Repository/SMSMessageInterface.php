<?php 
namespace Xaamin\Whatsapiravel\Repository;

interface SMSMessageInterface {
    public function sendMessage($to, $message);
    public function checkForNewMessages();
}