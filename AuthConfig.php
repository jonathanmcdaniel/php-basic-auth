<?php



/* Configuration file for php-basic-auth. Be sure to configure the file to match the needs of your database and use-case.
*/



class AuthConfig {



  /* Debug Mode */
  /*--------------------------------------------------------------------------------------------------------*/
  /* This mode will print errors for easy developer comprehension. Disable for production use. */
  public $debug = true;



  /* Database Configurations */
  /*--------------------------------------------------------------------------------------------------------*/
  // REQUIRED
  // URL or IP where database is located
  public $databaseHost = "127.0.0.1";

  // OPTIONAL
  // Port where database can be accessed on the host
  public $databasePort = "8889";


  // REQUIRED
  // Username with access to the database
  public $databaseUser = "root";

  // REQUIRED
  // Password for the username
  public $databasePassword = "root";

  // REQUIRED
  // Name of the database at the host being accessed
  public $databaseName = "";



  /* Security Settings */
  /*--------------------------------------------------------------------------------------------------------*/
  //REQUIRED
  // Did you use the password_hash() function?
  public $didUsePasswordHashing = true;



  /* SQL Prepared Statement */
  /*--------------------------------------------------------------------------------------------------------*/
  /* Write the SQL Statement to Match Your Needs. All information will be returned in an object */
  public $sqlStatement = "SELECT * FROM users WHERE username=? LIMIT 1";



}

?>
