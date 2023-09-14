<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Database\Factories\PostFactory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     * @return void
     */
    public function run()
    {
      $user =  User::factory()->create([
            'name' => 'ZIZO',


        ]);

        Post::Factory(10)->create([
            'user_id'=>$user->id
        ]);

//        $users = \App\Models\User::factory()->create();
////        $user = $users->first();
//
//        $personal = Category::create([
//            'name' => 'Personal',
//            'slug' => 'personal'
//        ]);
//
//        $family = Category::create([
//            'name' => 'Family',
//            'slug' => 'family'
//        ]);
//        $work = Category::create([
//            'name' => 'Work',
//            'slug' => 'work'
//        ]);
//
//        Post::create([
//            'user_id' => $user->id,
//            'category_id' => $family->id,
//            'title' => 'My Family Post',
//            'slug' => 'my-family-post',
//            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum, laboriosam asperiores illo sed in fugit. Voluptates culpa consequuntur, quibusdam
//    aut voluptatibus adipisci ea rem saepe consectetur? Reprehenderit fuga laborum voluptatem!Lorem ipsum dolor sit amet consectetur adipisicing elit.
//    Nostrum, laboriosam asperiores illo sed in fugit. Voluptates culpa consequuntur, quibusdam aut voluptatibus adipisci ea rem saepe consectetur?
//    Reprehenderit fuga laborum voluptatem!Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum,
//    laboriosam asperiores illo sed in fugit. Voluptates culpa consequuntur, quibusdam aut voluptatibus adipisci ea rem saepe consectetur? Reprehenderit
//    fuga laborum voluptatem!Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum, laboriosam asperiores illo sed in fugit. Voluptates culpa consequuntur,
//  ',
//            'excerpt' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>'
//        ]);
//        Post::create([
//            'user_id' => $user->id,
//            'category_id' => $work->id,
//            'title' => 'My Work Post',
//            'slug' => 'my-work-post',
//            'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum, laboriosam asperiores illo sed in fugit. Voluptates culpa consequuntur, quibusdam
//    aut voluptatibus adipisci ea rem saepe consectetur? Reprehenderit fuga laborum voluptatem!Lorem ipsum dolor sit amet consectetur adipisicing elit.
//    Nostrum, laboriosam asperiores illo sed in fugit. Voluptates culpa consequuntur, quibusdam aut voluptatibus adipisci ea rem saepe consectetur?
//    Reprehenderit fuga laborum voluptatem!Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum,
//    laboriosam asperiores illo sed in fugit. Voluptates culpa consequuntur, quibusdam aut voluptatibus adipisci ea rem saepe consectetur? Reprehenderit
//    fuga laborum voluptatem!Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum, laboriosam asperiores illo sed in fugit. Voluptates culpa consequuntur,</p>
//  ',
//            'excerpt' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>'
//        ]);
//
//        Post::create([
//            'user_id' => $user->id,
//            'category_id' => $work->id,
//            'title' => 'My Hobbies Post',
//            'slug' => 'my-hobbies-post',
//            'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum, laboriosam asperiores illo sed in fugit. Voluptates culpa consequuntur, quibusdam
//    aut voluptatibus adipisci ea rem saepe consectetur? Reprehenderit fuga laborum voluptatem!Lorem ipsum dolor sit amet consectetur adipisicing elit.
//    Nostrum, laboriosam asperiores illo sed in fugit. Voluptates culpa consequuntur, quibusdam aut voluptatibus adipisci ea rem saepe consectetur?
//    Reprehenderit fuga laborum voluptatem!Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum,
//    laboriosam asperiores illo sed in fugit. Voluptates culpa consequuntur, quibusdam aut voluptatibus adipisci ea rem saepe consectetur? Reprehenderit
//    fuga laborum voluptatem!Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum, laboriosam asperiores illo sed in fugit. Voluptates culpa consequuntur,</p>
//  ',
//            'excerpt' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>'
//        ]);



        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
