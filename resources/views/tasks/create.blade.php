<!-- resources/views/tasks/index.blade.php -->

@extends('layouts.default')

@section('content')
    <!-- Форма новой задачи -->
    <form action="{{ route('tasks.create') }}" method="POST" class="form-horizontal">
    {{ csrf_field() }}

    <!-- Имя задачи -->
        <div class="form-group">
            <label for="task" class="col-sm-3 control-label">Задача</label>

            <div class="col-sm-6">
                <input type="text" name="name" id="task" class="form-control">
            </div>
        </div>

        <!-- Кнопка добавления задачи -->
        <div class="form-group">
            <div class="col-sm-offset-3 col-sm-6">
                <button type="submit" class="btn btn-default">
                    <i class="fa fa-plus"></i> Добавить задачу
                </button>
            </div>
        </div>
    </form>
@endsection