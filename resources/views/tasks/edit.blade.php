<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Edit Task</title>

    <style>

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #faf9ff;
            color: #202020;
        }

        .container {
            width: 92%;
            max-width: 650px;
            margin: 50px auto;
        }

        .back-link {
            color: #7c3aed;
            text-decoration: none;
            font-size: 14px;
            font-weight: bold;
        }

        .back-link:hover {
            text-decoration: underline;
        }

        .form-card {
            background: white;
            border: 1px solid #e4e0eb;
            border-radius: 12px;
            padding: 35px;
            margin-top: 18px;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.05);
        }

        h1 {
            margin-top: 0;
            color: #18181b;
            font-size: 26px;
        }

        .subtitle {
            color: #777;
            margin-bottom: 25px;
        }

        label {
            display: block;
            margin-top: 18px;
            margin-bottom: 7px;
            font-weight: bold;
        }

        input,
        textarea,
        select {
            width: 100%;
            padding: 12px;
            border: 1px solid #d4d4d8;
            border-radius: 7px;
            font-family: Arial, sans-serif;
            font-size: 14px;
            background: white;
        }

        textarea {
            height: 120px;
            resize: vertical;
        }

        input:focus,
        textarea:focus,
        select:focus {
            outline: none;
            border-color: #7c3aed;
            box-shadow: 0 0 0 3px #ede9fe;
        }

        .update-button {
            margin-top: 25px;
            background: #7c3aed;
            color: white;
            border: none;
            padding: 12px 22px;
            border-radius: 7px;
            cursor: pointer;
            font-weight: bold;
        }

        .update-button:hover {
            background: #6d28d9;
        }

        .error {
            background: #fef2f2;
            color: #b91c1c;
            border: 1px solid #fecaca;
            padding: 12px;
            border-radius: 7px;
            margin-bottom: 20px;
        }

    </style>

</head>


<body>


<div class="container">


    <a href="/" class="back-link">
        ← Back to Tasks
    </a>


    <div class="form-card">


        <h1>
            Edit Task
        </h1>


        <div class="subtitle">
            Update the details of your task.
        </div>


        @if($errors->any())

            <div class="error">

                <strong>Please fix the following:</strong>

                <ul>

                    @foreach($errors->all() as $error)

                        <li>{{ $error }}</li>

                    @endforeach

                </ul>

            </div>

        @endif


        <form
            action="/tasks/{{ $task->id }}"
            method="POST"
        >

            @csrf

            @method('PUT')


            <label for="task_name">
                Task Name
            </label>

            <input
                type="text"
                id="task_name"
                name="task_name"
                value="{{ old('task_name', $task->task_name) }}"
                required
            >


            <label for="description">
                Description
            </label>

            <textarea
                id="description"
                name="description"
            >{{ old('description', $task->description) }}</textarea>


            <label for="status">
                Status
            </label>

            <select
                id="status"
                name="status"
            >

                <option
                    value="Pending"
                    {{ old('status', $task->status) === 'Pending' ? 'selected' : '' }}
                >
                    Pending
                </option>

                <option
                    value="Completed"
                    {{ old('status', $task->status) === 'Completed' ? 'selected' : '' }}
                >
                    Completed
                </option>

            </select>


            <label for="due_date">
                Due Date
            </label>

            <input
                type="date"
                id="due_date"
                name="due_date"
                value="{{ old('due_date', $task->due_date) }}"
            >


            <button
                type="submit"
                class="update-button"
            >
                Update Task
            </button>

        </form>


    </div>

</div>


</body>

</html>