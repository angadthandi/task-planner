<?php

require_once __DIR__ . "/../sprint/sprint.php";
require_once __DIR__ . "/../task/task.php";
require_once __DIR__ . "/../tasktype/tasktype.php";

class User {

    private string $name;
    private array $sprints; // Sprint[]
    private array $tasks; // Task[]

    public function __construct(string $name) {
        $this->name = $name;
    }

    public function createTask(int $taskType, string $desc): Task {
        $task = new Task($taskType, $desc, $this);

        $this->tasks[] = $task;

        return $task;
    }

    public function createSprint(string $name, int $start, int $end): Sprint {
        $sprint = new Sprint($name, $start, $end);

        $this->sprints[] = $sprint;

        return $sprint;
    }

    public function addToSprint(Sprint $sprint, Task $task): bool {
        foreach ($this->sprints as $userSprint) {
            if ($userSprint->getID() == $sprint->getID()) {
                return $sprint->addTask($task);
            }
        }

        return false;
    }

    public function removeFromSprint(Sprint $sprint, Task $task): bool {
        foreach ($this->sprints as $userSprint) {
            if ($userSprint->getID() == $sprint->getID()) {
                return $sprint->removeTask($task);
            }
        }

        return false;
    }

    public function changeTaskStatus(Task $task, int $taskStatus): bool {
        foreach ($this->tasks as $userTask) {
            if ($userTask->getID() == $task->getID()) {
                return $task->setTaskStatus($taskStatus);
            }
        }

        return false;
    }

    public function printAllTasks(): void {
        error_log("User name: " . $this->name);
        error_log(print_r($this->tasks, true));
    }

}