<?php

/* Configuration file for php-basic-auth. Be sure to configure the file to match the needs of your database and use-case. */

class AuthConfig {
  
  /* Debug Mode */
  /* This mode will print errors for easy developer comprehension. Disable for production use. */
  public $debug = true;


  /* Database Configurations */
  public $databaseHost = "127.0.0.1";   // URL or IP where database is located:               REQUIRED
  public $databasePort = "8889";        // Port where database can be accessed on the host:   OPTIONAL
  public $databaseUser = "root";        // Username with access to the database:              REQUIRED
  public $databasePassword = "root";    // Password for the username                          REQUIRED
  public $databaseName = "";            // Name of the database at the host being accessed:   REQUIRED
  

  /* Security Settings */
  public $didUsePasswordHashing = true; // Did you use the password_hash() function?          REQUIRED
  
  
  /* SQL Prepared Statement */
  /* Write the SQL Statement to Match Your Needs. All information will be returned in an object */
  public $sqlStatement = "SELECT * FROM users WHERE username=? LIMIT 1";
  
  
  /* User Information */
  /* DO NOT MODIFY THIS SECTION */
  public $user = $_SERVER['PHP_AUTH_USER'];
  public $password = $_SERVER['PHP_AUTH_PW'];
  
}

?>
