<?php

/**
 *
 * 
 */
class App_Core_Core { 
    
    /*
     * @param array $arguments;
     * 
     */
    
    public $arduinoVersion = '2014.01'; 
    public $arduinoRobotName ='001';
    public $arduinoEmulation=true;
    public $arduinoEngine="001";
    
    

    public function __construct(array $arguments = array()) {
      
      if($arguments['version']=true){  
       echo $this->arduinoVersion;  
      }
        
    }
    
    public static function set(){
        self::$arduinoEngine;
        
        
    }
    
    public function error(){
        return "Error";
    }
    
    public function controllerEngine(){
        
    }
    
    public function observerEngine(){
        
    }
    
    public function controlActionEngine(){
        
    }
    
    public function manualEngine(){
        
    }
    
    public function autoEngine(){
        
    }
    
    public function memoryEngine(){
        
    }
    
    public function learnEngine(){
        
    }
  
} 