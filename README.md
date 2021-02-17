# Task Planner (OOD)

## Entities:

- Sprint
- User
- Task
- TaskType
- TaskStatus

## Classes:

### Sprint
- SprintName STRING
- Start INT
- End INT
- Tasks Task[]

### User
- Name STRING
- Sprints Sprint[]
- Tasks Task[]

### Task
- ID INT
- TaskType TaskType
- TaskStatus TaskStatus
- Description STRING

### TaskType
- Type INT // STORY, BUG

### TaskStatus
- Status INT // OPEN, IN_PROGRESS, CLOSED

--------------------------------------

From src/public folder start php local server -
./../../php/php.exe -S localhost:8080 -c ../../php/php.ini

--------------------------------------

### Test Task Planner Flow: