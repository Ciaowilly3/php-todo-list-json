<!DOCTYPE html>
<html lang="it">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>ToDoList</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <!-- <link rel="stylesheet" href="css/style.css"> -->
        <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    </head>
    <body class="bg-dark">
        <div class="container" id="app">
            <div class="w-50 m-auto">
                <h1 class="text-center text-secondary my-4 fw-light display-1">Todo List</h1>
                <!-- contenitore per gli elementi della lista -->
                <div class="list-container bg-white rounded">
                    <ul class="list-group mb-3">
                        <li v-for="task in tasks" class="list-group-item d-flex align-items-center justify-content-between">
                            {{task.taskText}}
                            <i class="fa-solid fa-trash text-danger"></i>
                        </li>
                    </ul>
                </div>
                <form action="" method="$_POST" @submit.prevent="addTask()">
                    <div class="d-flex">
                        <input type="text" name="taskToAdd" v-model="formData.task" placeholder="inserisci elemento" class="form-control flex-grow-1">
                        <button class="btn btn-warning btn-lg">Inserisci</button>
                    </div>
                </form>
            </div>
        </div>
        <script src="js/main.js"></script>
    </body>
</html>
