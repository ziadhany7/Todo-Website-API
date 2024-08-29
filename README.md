

# Todo Website API Documentation

This API documentation provides a detailed overview of the Todo website, which allows users to manage their daily tasks efficiently. The API supports full CRUD (Create, Read, Update, Delete) operations, enabling users to add, view, update, mark as complete, and delete tasks. It is designed to facilitate seamless task management and improve productivity.

## Endpoints

### 1. Retrieve All Tasks

**Endpoint:**  
`GET http://localhost:8000/api/v1/tasks`

**Description:**  
This endpoint allows users to retrieve a list of all tasks. It returns an array of task objects, each containing details such as task ID, title, description, status (complete or incomplete), and timestamps.

**Request Headers:**
- `Accept: application/json`

**Body:**  
No body is required for this request.

---

### 2. Retrieve a Task

**Endpoint:**  
`GET http://localhost:8000/api/v1/tasks/1`

**Description:**  
This endpoint retrieves the details of a specific task using its unique identifier (task ID). It returns the task’s title, description, status, and timestamps, allowing users to view the task's complete information.

**Request Headers:**
- `Accept: application/json`

**Body:**  
No body is required for this request.

---

### 3. Storing a Task (POST)

**Endpoint:**  
`POST http://localhost:8000/api/v1/tasks`

**Description:**  
This endpoint allows users to create and store a new task. Users need to provide the task's title and description. The task is stored in the database and returns the newly created task’s details, including its unique ID and timestamps.

**Request Headers:**
- `Accept: application/json`

**Body (JSON format):**

```json
{
    "name": "api 1",
    "is_completed": true
}
```

---

### 4. Storing a Task (PUT)

**Endpoint:**  
`PUT http://localhost:8000/api/v1/tasks/11`

**Description:**  
This endpoint allows users to update an existing task by its ID. Users need to provide the task's title and description. The task is updated in the database and returns the updated task’s details, including its unique ID and timestamps.

**Request Headers:**
- `Accept: application/json`

**Body (JSON format):**

```json
{
    "name": "ZOZ API UPDATED"
}
```

---

### 5. Mark a Task as Complete

**Endpoint:**  
`PATCH http://localhost:8000/api/v1/tasks/11/complete`

**Description:**  
This endpoint allows users to update a specific task’s status to complete. By providing the task ID, users can mark the task as done, which updates its status in the database.

**Request Headers:**
- `Accept: application/json`

**Body (JSON format):**

```json
{
    "is_completed": true
}
```

---

### 6. Delete a Task

**Endpoint:**  
`DELETE http://localhost:8000/api/v1/tasks/11`

**Description:**  
This endpoint allows users to delete a specific task from the database. By providing the task ID, the user can remove the task permanently, ensuring their task list remains up-to-date and clutter-free.

**Request Headers:**
- `Accept: application/json`

**Body:**  
No body is required for this request.
