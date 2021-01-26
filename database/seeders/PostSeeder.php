<?php

namespace Database\Seeders;
use App\Models\Post;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = new Post();
        $data->title = ('post5');
        $data->content = 'content5';
        $data->tag = 'tag5';
        $data->save();
    }
}
