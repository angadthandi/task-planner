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

    public function createTask(int $taskType, string $desc): bool {

    }

    public function createSprint(string $name, int $begin, int $end): bool {

    }

    public function addToSprint(Sprint $sprint, Task $task): bool {

    }

    public function removeFromSprint(Sprint $sprint, Task $task): bool {

    }

    public function changeTaskStatus(Task $task, int $taskStatus): bool {

    }

    public function printAllTasks(): void {

    }

}