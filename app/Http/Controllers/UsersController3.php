<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User, App\Models\Post, App\Models\Tag, App\Models\Project, App\Models\Task;
use Hash;
class UsersController3 extends Controller
{
    public function __construct(){
    }
    public function createProject1(Request $request){
        $project1 = Project::create([
            'title' => 'Project A'
        ]);
                $user1 = User::create([
                    'name' => 'User 1',
                    'email' => 'user1@example.com',
                    'password' => Hash::make('password'),
                    'project_id' => $project1->id
                ]);
                        $task1 = Task::create([
                            'title' => 'Task 1 for project 1 by user 1',
                            'user_id' => $user1->id
                        ]);
                        $task2 = Task::create([
                            'title' => 'Task 2 for project 1 by user 1',
                            'user_id' => $user1->id
                        ]);
                $user2 = User::create([
                    'name' => 'User 2',
                    'email' => 'user2@example.com',
                    'password' => Hash::make('password'),
                    'project_id' => $project1->id
                ]);
                        $task3 = Task::create([
                            'title' => 'Task 3 for project 1 by user 2',
                            'user_id' => $user2->id
                        ]);
        exit;
    }
    public function createProject2(Request $request){
        $project2 = Project::create([
            'title' => 'Project B'
        ]);
                $user3 = User::create([
                    'name' => 'User 3',
                    'email' => 'user3@example.com',
                    'password' => Hash::make('password'),
                    'project_id' => $project2->id
                ]);
                        $task4 = Task::create([
                            'title' => 'Task 4 for project 2 by user 3',
                            'user_id' => $user3->id
                        ]);
                        $task5 = Task::create([
                            'title' => 'Task 5 for project 2 by user 3',
                            'user_id' => $user3->id
                        ]);
                $user4 = User::create([
                    'name' => 'User 4',
                    'email' => 'user4@example.com',
                    'password' => Hash::make('password'),
                    'project_id' => $project2->id
                ]);
                        $task6 = Task::create([
                            'title' => 'Task 6 for project 2 by user 4',
                            'user_id' => $user4->id
                        ]);
                $user5 = User::create([
                    'name' => 'User 5',
                    'email' => 'user5@example.com',
                    'password' => Hash::make('password'),
                    'project_id' => $project2->id
                ]);
        exit;
    }
}
?>