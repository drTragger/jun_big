<?php

namespace App\Http\Controllers\Tasks;

use Illuminate\Http\Request;
use App\Models\Task;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class TasksController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('tasks.index');
    }

    public function create()
    {
        return view('tasks.create');
    }

    public function add(Request $request)
    {
        $this->validate(
            $request,
            ['name' => 'required|max:255']
        );
        $user = $request->user();
        $user->tasks()->create(
            [
                'name' => $request->name,
            ]
        );
//        $task = new Task();
//        $task->name = $request->name;
//        $task->user_id = $user->id;
//        $task->save();
        return redirect(route('tasks.index'));
    }
}
