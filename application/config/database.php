<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/* -------------------------------------------------------------
| 0 : No error reporting
| 1 : PHP fatal errors & DB errors
| 2 : PHP compiler errors and DB errors
| 3 : All PHP errors, warnings & notices and DB errors
------------------------------------------------------------- */

$debug_errors = 0;

/*
|---------------------------------------------------------------
| PHP & DB ERROR REPORTING LEVEL
|---------------------------------------------------------------
*/

if ($debug_errors === 3)
{
    ini_set('display_errors', 'On');
    error_reporting(E_ALL);
    define('MP_DB_DEBUG', true);
}
elseif ($debug_errors === 2)
{
    ini_set('display_errors', 'On');
    error_reporting(E_ERROR | E_PARSE);
    define('MP_DB_DEBUG', true);
}
elseif ($debug_errors === 1)
{
    ini_set('display_errors', 'Off');
    error_reporting(E_ERROR);
    define('MP_DB_DEBUG', true);
}
else
{
    ini_set('display_errors', 'Off');
    error_reporting(0);
    define('MP_DB_DEBUG', false);
} 


/*
| -------------------------------------------------------------------
| DATABASE CONNECTIVITY SETTINGS
| -------------------------------------------------------------------
| This file will contain the settings needed to access your database.
|
| For complete instructions please consult the "Database Connection"
| page of the User Guide.
|
| -------------------------------------------------------------------
| EXPLANATION OF VARIABLES
| -------------------------------------------------------------------
|
|	['hostname'] The hostname of your database server.
|	['username'] The username used to connect to the database
|	['password'] The password used to connect to the database
|	['database'] The name of the database you want to connect to
|	['dbdriver'] The database type. ie: mysql.  Currently supported:
				 mysql, mysqli, postgre, odbc, mssql, sqlite, oci8
|	['dbprefix'] You can add an optional prefix, which will be added
|				 to the table name when using the  Active Record class
|	['pconnect'] TRUE/FALSE - Whether to use a persistent connection
|	['db_debug'] TRUE/FALSE - Whether database errors should be displayed.
|	['cache_on'] TRUE/FALSE - Enables/disables query caching
|	['cachedir'] The path to the folder where cache files should be stored
|	['char_set'] The character set used in communicating with the database
|	['dbcollat'] The character collation used in communicating with the database
|
| The $active_group variable lets you choose which connection group to
| make active.  By default there is only one group (the "default" group).
|
| The $active_record variables lets you determine whether or not to load
| the active record class
*/

$active_group = "default";
$active_record = TRUE;

$db['default']['hostname'] = "localhost";
$db['default']['username'] = "verdebus_verde";
$db['default']['password'] = "verde2010";
$db['default']['database'] = "verdebus_verdebus";
$db['default']['dbdriver'] = "mysql";
$db['default']['dbprefix'] = "";
$db['default']['pconnect'] = TRUE;
$db['default']['db_debug'] = TRUE;
$db['default']['cache_on'] = FALSE;
$db['default']['cachedir'] = "";
$db['default']['char_set'] = "utf8";
$db['default']['dbcollat'] = "utf8_general_ci";


/* End of file database.php */
/* Location: ./system/application/config/database.php */