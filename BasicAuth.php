<?php


require __DIR__ . '/AuthConfig.php';


class BasicAuth {
  
  
  // Auth Config Object
  $AuthConfig;
  
  
  // User Credentials
  $user;
  $password;
  
  
  // Set up the Auth Config Object
  function __construct () {
    $this->AuthConfig = new AuthConfig();
  }
  
  
  // Authenticate the User
  public function authenticate ($user = $_SERVER['PHP_AUTH_USER'], $password = $_SERVER['PHP_AUTH_PW']) {
    
    // Set Object Variables
    $this->user = $user;
    $this->password = $password;
    
    validateConfigSettings();
    retrieveUser();
    
    return;
  }
  
  
  // Ensure hat Configurations are Properly Set
  private function validateConfigSettings ($AuthConfig = $this->AuthConfig) {
    
  }
  
  
  // Retrieve the Particular User from the Database
  private function retrieveUser () {
    
  }


}


?>
