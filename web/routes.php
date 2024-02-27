<?
use Steampixel\Route;
use Red\TodoappCom\controller\TaskController;

// Add your first route
Route::add('/api/findAll', function() {
    $taskController = new TaskController;
    echo $taskController->findAlltasks();

});


Route::add('/api/deleteTask', function() {
 
});

Route::add('/api/createTask', function() {
 
});


Route::add('/api/createTAsk', function() {
 
});

