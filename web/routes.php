<?
use Steampixel\Route;
use Red\TodoappCom\controller\TaskController;

// Add your first route
Route::add('/api/findAll', function() {
    $taskController = new TaskController;
    echo $taskController->findAlltasks();
});

Route::add('/api/dropTaskById/([0-9-]*)', function($id) {
    $taskController = new TaskController;
    echo $taskController->dropTaskById($id);
}, 'delete');

Route::add('/api/addTask', function() {
    $json = json_decode(file_get_contents("php://input"), true);
    $taskController = new TaskController;
    echo $taskController->addTask($json);
}, 'post');


Route::add('/api/taskDone/([0-9-]*)', function($id){
    $taskController = new TaskController;
    echo $taskController->taskDone($id);
},'patch');
