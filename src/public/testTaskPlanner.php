<?php

require_once __DIR__ . "/../app/modules/user/user.php";
require_once __DIR__ . "/../app/modules/sprint/sprint.php";
require_once __DIR__ . "/../app/modules/task/task.php";
require_once __DIR__ . "/../app/modules/tasktype/tasktype.php";
require_once __DIR__ . "/../app/modules/taskstatus/taskstatus.php";

function boolToString(bool $val): string {
    return ($val) ? "true" : "false";
}

$user_1 = new User("User 1");
$user_2 = new User("User 2");

$task_11 = $user_1->createTask(TaskType::STORY, "Task Story 11");
$task_12 = $user_1->createTask(TaskType::BUG, "Task Bug 12");
$task_21 = $user_2->createTask(TaskType::BUG, "Task Bug 21");

$sprint_11 = $user_1->createSprint("Sprint 11", 10, 24);
$sprint_21 = $user_2->createSprint("Sprint 21", 16, 30);

$task_11_statusChanged = $user_1->changeTaskStatus(
    $task_11, TaskStatus::IN_PROGRESS
);
// true/1
error_log('$task_11_statusChanged: ' . boolToString($task_11_statusChanged));

$task_11_added_to_sprint_11 = $user_1->addToSprint($sprint_11, $task_11);
// true/1
error_log('$task_11_added_to_sprint_11: ' . boolToString($task_11_added_to_sprint_11));

$task_12_added_to_sprint_11 = $user_1->addToSprint($sprint_11, $task_12);
// true/1
error_log('$task_12_added_to_sprint_11: ' . boolToString($task_12_added_to_sprint_11));

$task_11_added_to_sprint_21 = $user_1->addToSprint($sprint_21, $task_11);
// false/0
error_log('$task_11_added_to_sprint_21: ' . boolToString($task_11_added_to_sprint_21));

$task_11_removed_from_sprint_11 = $user_1->removeFromSprint($sprint_11, $task_11);
// true/1
error_log('$task_11_removed_from_sprint_11: ' . boolToString($task_11_removed_from_sprint_11));

$task_11_added_to_sprint_11_by_user_2 = $user_2->addToSprint($sprint_11, $task_11);
// false/0
error_log('$task_11_added_to_sprint_11_by_user_2: ' . boolToString($task_11_added_to_sprint_11_by_user_2));

$task_11_removed_from_sprint_11_by_user_2 = $user_2->removeFromSprint($sprint_11, $task_12);
// false/0
error_log('$task_11_removed_from_sprint_11_by_user_2: ' . boolToString($task_11_removed_from_sprint_11_by_user_2));

$task_21_added_to_sprint_21 = $user_2->addToSprint($sprint_21, $task_21);
// true/1
error_log('$task_21_added_to_sprint_21: ' . boolToString($task_21_added_to_sprint_21));

$sprint_11->printDetails();
$user_1->printAllTasks();

$sprint_21->printDetails();
$user_2->printAllTasks();