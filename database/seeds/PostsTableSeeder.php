<?php

use App\Post;
use App\Tag;
use App\Category;
use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category1 = Category::create([
            'name'=>'News'
        ]);

        $author1 = App\User::create([
            'name'=>"John Doe",
            'email'=>'john@doe.com',
            'password'=>Hash::make('password')
        ]);
        $author2 = App\User::create([
            'name'=>"Sarah Smiles",
            'email'=>'sarag@smiles.com',
            'password'=>Hash::make('<password></password>')
        ]);
        $author3 = App\User::create([
            'name'=>"Jimmy Jones",
            'email'=>'jimmy@jones.com',
            'password'=>Hash::make('password')
        ]);
        $category2 = Category::create([
            'name'=>'Marketing'
        ]);
        $category3 = Category::create([
            'name'=>'Partnership'
        ]);
        $post1 = Post::create([
            'title' => 'We relocated our office to a new desigend garage',
            'description'=> 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. ',
            'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. ',
            'category_id' => $category1->id,
            'image'=>'storage/posts/5.jpg',
            'user_id' => $author1->id,
            ]);
        $post2 = Post::create([
            'title' => 'Top 5 brilliant content marketing strategies',
            'description'=> 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. ',
            'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. ',
            'category_id' => $category2->id,
            'image'=>'storage/posts/6.jpg',
            'user_id' => $author2->id,
            ]);
        $post3 = Post::create([
            'title' => 'Best practices for minimalist design with example',
            'description'=> 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. ',
            'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. ',
            'category_id' => $category3->id,
            'image'=>'storage/posts/7.jpg',
            'user_id' => $author3->id,
            ]);
        $post4 = $author1->posts()->create([
            'title' => 'Congratulate and thank to Maryam for joining our team',
            'description'=> 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. ',
            'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. ',
            'category_id' => $category2->id,
            'image'=>'storage/posts/8.jpg',
        ]);

        $tag1=Tag::create([
            'name'=> 'job',
        ]);
        $tag2=Tag::create([
            'name'=> 'customers',
        ]);
        $tag3=Tag::create([
            'name'=> 'record',
        ]);

        $post1->tags()->attach([$tag1->id, $tag2->id]);
        $post2->tags()->attach([$tag2->id, $tag3->id]);
        $post3->tags()->attach([$tag1->id, $tag3->id]);

    }
}
