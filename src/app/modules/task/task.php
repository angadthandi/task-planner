<?php

require_once __DIR__ . "/../tasktype/tasktype.php";
require_once __DIR__ . "/../taskstatus/taskstatus.php";
require_once __DIR__ . "/../user/user.php";

class Task {

    private int $id;
    private string $description;
    private int $taskType;
    private int $taskStatus;
    private User $user;

    private static int $taskIDIncrementor = 0;

    public function __construct(
        int $taskType,
        string $description,
        User $user
    ) {
        static::$taskIDIncrementor++;

        $this->id = static::$taskIDIncrementor;
        $this->description = $description;
        $this->taskType = $taskType;
        $this->taskStatus = TaskStatus::OPEN;
        $this->User = $user;
    }

    public function setTaskStatus(int $taskStatus): bool {

    }

    public function setTaskType(int $taskType): bool {

    }

    public function setTaskUser(User $user): bool {

    }

}