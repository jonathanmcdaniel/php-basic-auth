<?php


require __DIR__ . '/AuthConfig.php';


class BasicAuth {
  
  $user;
  $password;
  
  
  // Authenticate the User
  public function authenticate ($user = $_SERVER['PHP_AUTH_USER'], $password = $_SERVER['PHP_AUTH_PW']) {
    
    // Set Object Variables
    $this->user = $user;
    $this->password = $password;
    
  }
  
  
  // Ensure hat Configurations are Properly Set
  private function validateConfigSettings () {
    
  }
  
  
  // Retrieve the Particular User from the Database
  private function retrieveUser () {
    
  }


}


?>
