<?php

require_once __DIR__ . "/../task/task.php";

class Sprint {

    private int $id;
    private string $name;
    private int $start;
    private int $end;
    private array $tasks; // Task[]

    private static int $sprintIDIncrementor = 0;

    public function __construct(
        string $name,
        int $start,
        int $end,
    ) {
        static::$sprintIDIncrementor++;

        $this->id = static::$sprintIDIncrementor;
        $this->name = $name;
        $this->start = $start;
        $this->end = $end;
    }

    public function getID(): int {
        return $this->id;
    }

    public function addTask(Task $task): bool {
        $this->tasks[] = $task;
        return true;
    }

    public function removeTask(Task $task): bool {
        if (($key = array_search($task, $this->tasks)) !== false) {
            unset($this->tasks[$key]);
            return true;
        }
        return false;
    }

    public function printDetails(): void {
        error_log("Sprint name: " . $this->name);
        error_log("Sprint start: " . $this->start);
        error_log("Sprint end: " . $this->end);
        error_log("Sprint tasks: ");
        error_log(print_r($this->tasks, true));
    }

}