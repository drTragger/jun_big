<!-- resources/views/tasks/index.blade.php -->

@extends('layouts.default')

@section('content')
    <form action="{{ route('tasks.create') }}" method="POST" class="form-horizontal">
        {{ csrf_field() }}
        {{ method_field('get') }}
        <div class="form-group">
            <div class="col-sm-offset-3 col-sm-6">
                <button type="submit" class="btn btn-default">
                    <i class="fa fa-plus"></i> New task
                </button>
            </div>
        </div>
    </form>
    <!-- Форма создания задачи... -->

    <!-- Текущие задачи -->
    @if (count($tasks) > 0)
        <div class="panel panel-default">
            <div class="panel-heading">
                Задачи
            </div>

            <div class="panel-body">
                <table class="table table-striped task-table">

                    <!-- Заголовок таблицы -->
                    <thead>
                    <tr>
                        <th>Имя</th>
                        <th>Действие</th>
                    </tr>
                    </thead>

                    <!-- Тело таблицы -->
                    <tbody>
                    @foreach ($tasks as $task)
                        <tr>
                            <!-- Имя задачи -->
                            <td class="table-text">
                                <div>{{ $task->name }}</div>
                            </td>

                            <td>
                                <!-- TODO: Кнопка Удалить -->
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    @endif
@endsection