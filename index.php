<?
use Steampixel\Route;

require_once __DIR__ . '/vendor/autoload.php';
include 'web/routes.php';
include 'rb.php';
R::setup( 'mysql:host=localhost;dbname=todo','root', '' );





Route::run('/');
