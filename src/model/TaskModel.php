<?

namespace Red\TodoappCom\model;


class TaskModel {


    public function findAllTasks() {
        return \R::findAll('tasks');
    }
}