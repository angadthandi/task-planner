<?php

require_once __DIR__ . "/../task/task.php";

class Sprint {

    private string $name;
    private int $start;
    private int $end;
    private array $tasks; // Task[]

    public function __construct(
        string $name,
        int $start,
        int $end,
    ) {
        $this->name = $name;
        $this->start = $start;
        $this->end = $end;
    }

    public function addTask(Task $task): bool {

    }

    public function removeTask(Task $task): bool {

    }

    public function printDetails(): void {

    }

}