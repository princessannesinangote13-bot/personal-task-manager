<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Personal Task Manager</title>

    <style>

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background: #faf9ff;
            color: #202020;
        }

        /* =========================
           MAIN CONTAINER
        ========================= */

        .container {
            width: 92%;
            max-width: 1100px;
            margin: 0 auto;
            padding: 35px 0 60px;
        }


        /* =========================
           TOP HEADER
        ========================= */

        .top-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 30px;
        }

        .welcome h1 {
            margin: 0;
            font-size: 28px;
            color: #18181b;
        }

        .welcome p {
            margin: 7px 0 0;
            color: #777;
            font-size: 14px;
        }


        /* =========================
           ADD BUTTON
        ========================= */

        .add-button {
            display: inline-block;
            background: #7c3aed;
            color: white;
            text-decoration: none;
            padding: 12px 20px;
            border-radius: 8px;
            font-size: 14px;
            font-weight: bold;
            transition: 0.2s;
        }

        .add-button:hover {
            background: #6d28d9;
        }


        /* =========================
           SUMMARY CARDS
        ========================= */

        .summary {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 16px;
            margin-bottom: 35px;
        }

        .summary-card {
            background: white;
            border: 1px solid #e4e0eb;
            border-radius: 12px;
            padding: 25px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.04);
        }

        .summary-number {
            font-size: 28px;
            font-weight: bold;
            margin-bottom: 6px;
        }

        .summary-title {
            color: #777;
            font-size: 14px;
        }

        .total-number {
            color: #7c3aed;
        }

        .pending-number {
            color: #ea580c;
        }

        .completed-number {
            color: #16a34a;
        }


        /* =========================
           SECTION
        ========================= */

        .section {
            margin-bottom: 35px;
        }

        .section-title {
            font-size: 20px;
            margin-bottom: 15px;
            color: #18181b;
        }


        /* =========================
           TASK CARD
        ========================= */

        .task-card {
            background: white;
            border: 1px solid #e4e0eb;
            border-radius: 12px;
            padding: 20px;
            margin-bottom: 12px;

            display: flex;
            align-items: center;
            justify-content: space-between;

            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.04);

            transition: 0.2s;
        }

        .task-card:hover {
            border-color: #c4b5fd;
            box-shadow: 0 4px 10px rgba(124, 58, 237, 0.08);
        }


        /* =========================
           TASK INFORMATION
        ========================= */

        .task-left {
            display: flex;
            align-items: flex-start;
            gap: 14px;
        }

        .task-check {
            margin-top: 4px;
        }

        .task-check input {
            width: 18px;
            height: 18px;
            accent-color: #7c3aed;
            cursor: pointer;
        }

        .task-info h3 {
            margin: 0;
            font-size: 16px;
            color: #222;
        }

        .task-description {
            margin: 7px 0;
            color: #666;
            font-size: 14px;
        }

        .task-date {
            font-size: 12px;
            color: #999;
        }


        /* =========================
           STATUS
        ========================= */

        .status {
            display: inline-block;
            padding: 5px 10px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: bold;
            margin-top: 8px;
        }

        .status-pending {
            background: #fff7ed;
            color: #ea580c;
        }

        .status-completed {
            background: #f0fdf4;
            color: #16a34a;
        }


        /* =========================
           ACTION BUTTONS
        ========================= */

        .actions {
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .actions form {
            margin: 0;
        }

        .edit-button {
            background: #f5f3ff;
            color: #7c3aed;
            border: 1px solid #ddd6fe;
            text-decoration: none;
            padding: 9px 13px;
            border-radius: 7px;
            font-size: 13px;
            font-weight: bold;
        }

        .edit-button:hover {
            background: #ede9fe;
        }

        .complete-button {
            background: #7c3aed;
            color: white;
            border: none;
            padding: 9px 13px;
            border-radius: 7px;
            font-size: 13px;
            font-weight: bold;
            cursor: pointer;
        }

        .complete-button:hover {
            background: #6d28d9;
        }

        .delete-button {
            background: white;
            color: #dc2626;
            border: 1px solid #fecaca;
            padding: 9px 13px;
            border-radius: 7px;
            font-size: 13px;
            font-weight: bold;
            cursor: pointer;
        }

        .delete-button:hover {
            background: #fef2f2;
        }


        /* =========================
           SUCCESS MESSAGE
        ========================= */

        .success {
            background: #f0fdf4;
            color: #15803d;
            border: 1px solid #bbf7d0;
            padding: 12px 15px;
            border-radius: 8px;
            margin-bottom: 20px;
        }


        /* =========================
           EMPTY MESSAGE
        ========================= */

        .empty {
            background: white;
            border: 1px solid #e4e0eb;
            border-radius: 12px;
            padding: 35px;
            text-align: center;
            color: #888;
        }


        /* =========================
           MOBILE
        ========================= */

        @media (max-width: 750px) {

            .summary {
                grid-template-columns: 1fr;
            }

            .top-header {
                flex-direction: column;
                align-items: flex-start;
                gap: 18px;
            }

            .task-card {
                flex-direction: column;
                align-items: flex-start;
                gap: 18px;
            }

            .actions {
                width: 100%;
                flex-wrap: wrap;
            }

        }

    </style>

</head>


<body>


<div class="container">


    {{-- =========================
         HEADER
    ========================= --}}

    <div class="top-header">

        <div class="welcome">

            <h1>
                Personal Task Manager
            </h1>

            <p>
                Organize your tasks and stay productive.
            </p>

        </div>


        <a href="/tasks/create" class="add-button">
            + Add New Task
        </a>

    </div>



    {{-- =========================
         SUCCESS MESSAGE
    ========================= --}}

    @if(session('success'))

        <div class="success">
            {{ session('success') }}
        </div>

    @endif



    {{-- =========================
         SUMMARY
    ========================= --}}

    <div class="summary">


        <div class="summary-card">

            <div class="summary-number total-number">
                {{ $tasks->count() }}
            </div>

            <div class="summary-title">
                Total Tasks
            </div>

        </div>


        <div class="summary-card">

            <div class="summary-number pending-number">
                {{ $tasks->where('status', 'Pending')->count() }}
            </div>

            <div class="summary-title">
                Pending
            </div>

        </div>


        <div class="summary-card">

            <div class="summary-number completed-number">
                {{ $tasks->where('status', 'Completed')->count() }}
            </div>

            <div class="summary-title">
                Completed
            </div>

        </div>

    </div>



    {{-- =========================
         PENDING TASKS
    ========================= --}}

    <div class="section">

        <div class="section-title">
            Pending Tasks
        </div>


        @php
            $pendingTasks = $tasks->where('status', 'Pending');
        @endphp


        @if($pendingTasks->count() > 0)


            @foreach($pendingTasks as $task)

                <div class="task-card">


                    <div class="task-left">


                        <div class="task-check">

                            <form
                                action="/tasks/{{ $task->id }}/status"
                                method="POST"
                            >

                                @csrf

                                @method('PATCH')

                                <input
                                    type="checkbox"
                                    onclick="this.form.submit()"
                                >

                            </form>

                        </div>


                        <div class="task-info">

                            <h3>
                                {{ $task->task_name }}
                            </h3>


                            @if($task->description)

                                <div class="task-description">
                                    {{ $task->description }}
                                </div>

                            @endif


                            <div class="task-date">

                                Due:
                                {{ $task->due_date ?? 'No due date' }}

                            </div>


                            <span class="status status-pending">
                                Pending
                            </span>

                        </div>

                    </div>



                    <div class="actions">


                        {{-- EDIT --}}

                        <a
                            href="/tasks/{{ $task->id }}/edit"
                            class="edit-button"
                        >
                            Edit
                        </a>


                        {{-- COMPLETE --}}

                        <form
                            action="/tasks/{{ $task->id }}/status"
                            method="POST"
                        >

                            @csrf

                            @method('PATCH')

                            <button
                                type="submit"
                                class="complete-button"
                            >
                                Complete
                            </button>

                        </form>


                        {{-- DELETE --}}

                        <form
                            action="/tasks/{{ $task->id }}"
                            method="POST"
                        >

                            @csrf

                            @method('DELETE')

                            <button
                                type="submit"
                                class="delete-button"
                                onclick="return confirm('Are you sure you want to delete this task?')"
                            >
                                Delete
                            </button>

                        </form>

                    </div>

                </div>

            @endforeach


        @else

            <div class="empty">
                No pending tasks.
            </div>

        @endif

    </div>



    {{-- =========================
         COMPLETED TASKS
    ========================= --}}

    <div class="section">

        <div class="section-title">
            Completed Tasks
        </div>


        @php
            $completedTasks = $tasks->where('status', 'Completed');
        @endphp


        @if($completedTasks->count() > 0)


            @foreach($completedTasks as $task)

                <div class="task-card">


                    <div class="task-left">


                        <div class="task-check">

                            <form
                                action="/tasks/{{ $task->id }}/status"
                                method="POST"
                            >

                                @csrf

                                @method('PATCH')

                                <input
                                    type="checkbox"
                                    checked
                                    onclick="this.form.submit()"
                                >

                            </form>

                        </div>


                        <div class="task-info">

                            <h3>
                                {{ $task->task_name }}
                            </h3>


                            @if($task->description)

                                <div class="task-description">
                                    {{ $task->description }}
                                </div>

                            @endif


                            <div class="task-date">

                                Completed:
                                {{ $task->due_date ?? 'No date' }}

                            </div>


                            <span class="status status-completed">
                                Completed
                            </span>

                        </div>

                    </div>



                    <div class="actions">


                        {{-- SET PENDING --}}

                        <form
                            action="/tasks/{{ $task->id }}/status"
                            method="POST"
                        >

                            @csrf

                            @method('PATCH')

                            <button
                                type="submit"
                                class="complete-button"
                            >
                                Set Pending
                            </button>

                        </form>


                        {{-- DELETE --}}

                        <form
                            action="/tasks/{{ $task->id }}"
                            method="POST"
                        >

                            @csrf

                            @method('DELETE')

                            <button
                                type="submit"
                                class="delete-button"
                                onclick="return confirm('Are you sure you want to delete this task?')"
                            >
                                Delete
                            </button>

                        </form>

                    </div>

                </div>

            @endforeach


        @else

            <div class="empty">
                No completed tasks.
            </div>

        @endif

    </div>


</div>


</body>

</html>