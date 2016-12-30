<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$GLOBALS['$logger'];
$GLOBALS['$errorCode'] = '000';
$GLOBALS['$exceptionObj'] = null;
$GLOBALS['$errorMsg'] = 'Somethibg went wrong! Please contact helpdesk.';
/**
 * Description of LConnectApplicationException
 *
 * @author deepak.srikantaiah
 */
class LConnectApplicationException extends Exception {
    //put your code here
    
    function __construct($errorCode, $exceptionObj, $errorMsg) {
       $GLOBALS['$errorCode'] = $errorCode;
       $GLOBALS['$exceptionObj'] = $exceptionObj;
       //TODO - Convert Error Code to Error Message. Do Database Lookup to map Error Code to Error Message
       $GLOBALS['$logger']->error("Initializing Exception Object: ". $errorMsg);
       $GLOBALS['$logger']->error("Initializing Exception Object: ". $errorMsg);
       $GLOBALS['$errorMsg'] = $errorMsg;       
    }
   
   public function initialize($errorCode, $exceptionObj) {
       $GLOBALS['$logger'] = Logger::getLogger('LConnectApplicationException');
       $GLOBALS['$logger']->debug("Initializing Exception Object: ". $errorCode);
       //TODO - Convert Error Code to Error Message. Do Database Lookup to map Error Code to Error Message
       $GLOBALS['$logger']->error("Initializing Exception Object: ". $exceptionObj->getMessage());
       $GLOBALS['$errorMsg'] = $exceptionObj->getMessage();       
   }
   
   public function getErrorMessage() {
       return $GLOBALS['$errorMsg'];
   }
}
