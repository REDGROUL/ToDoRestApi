<?
namespace Red\TodoappCom\controller;
use Red\TodoappCom\model\TaskModel;

class TaskController {

    private $taskModel;

    function __construct() {
        $this->taskModel = new TaskModel;
    }

    public function findAlltasks() {
        return json_encode($this->taskModel->findAllTasks());
    }


}