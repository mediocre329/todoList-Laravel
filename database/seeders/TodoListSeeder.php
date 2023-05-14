<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\todolist;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TodoListSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $todolist = [
            [
                'title' => 'Todo List #1',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla eu lorem sed sapien ultrices ultrices eu sed sapien. Nulla eu lorem',
                'is_done' => false,
                ],
            [
                'title' => 'Todo List #2',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla eu lorem sed sapien ultrices ultrices eu sed sapien. Nulla eu lorem',
                'is_done' => false,
                ],

            ];

            foreach($todolist as $key=> $value) {
                todolist::create($value);
            }
    }
}
