<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        DB::table('users')->truncate();
        DB::table('posts')->truncate();
        DB::table('photos')->truncate();
        DB::table('roles')->truncate();
        DB::table('comments')->truncate();
        DB::table('comment_replies')->truncate();
        DB::table('categories')->truncate();

        factory(App\User::class, 50)->create()->each(function($user) {
            $user->posts()->save(factory(App\Post::class)->make());
        });

        factory(App\Comment::class, 50)->create()->each(function($comment_reply) {
            $comment_reply->commentReply()->save(factory(App\CommentReply::class)->make());
        });

        factory(App\Category::class, 10)->create();

        factory(App\Role::class, 3)->create();

        factory(App\Photo::class, 1)->create();

    }
}