<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(5)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        // User::create([
        //     'name' => 'Ahsanul Fatikhin',
        //     'email' => 'ahsanulfatikhin@gmail.com',
        //     'password' => bcrypt('123')
        // ]);
        // User::create([
        //     'name' => 'Sulistyono',
        //     'email' => 'sulis@gmail.com',
        //     'password' => bcrypt('123')
        // ]);
        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);
        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'tittle' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus deserunt nostrum corporis qui tempore odio dignissimos provident,',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus deserunt nostrum corporis qui tempore odio dignissimos provident, tenetur dolore sequi velit quae ipsa, soluta officia beatae, labore eveniet. Illum deleniti sint architecto dolorem iure, praesentium dolor eum modi, doloremque adipisci nisi provident dignissimos perspiciatis reprehenderit consequatur voluptas earum hic aliquid fugiat at tempore dolores. Eos officiis debitis obcaecati vel quibusdam molestiae, error totam excepturi nostrum architecto fugit ut fugiat. Iste quaerat, animi ducimus illo voluptatem nihil deleniti a odit voluptatibus nostrum autem, et sequi vero molestiae nisi neque est. Nam vel facilis eos, temporibus aliquam atque dolore eveniet ipsam excepturi dignissimos sit, autem blanditiis quas illo eum commodi maiores? Delectus laudantium expedita autem, dicta distinctio ab? Repellendus quae magnam optio fuga sint obcaecati quod velit iure, facilis alias corporis eligendi.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);
        // Post::create([
        //     'tittle' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus deserunt nostrum corporis qui tempore odio dignissimos provident,',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus deserunt nostrum corporis qui tempore odio dignissimos provident, tenetur dolore sequi velit quae ipsa, soluta officia beatae, labore eveniet. Illum deleniti sint architecto dolorem iure, praesentium dolor eum modi, doloremque adipisci nisi provident dignissimos perspiciatis reprehenderit consequatur voluptas earum hic aliquid fugiat at tempore dolores. Eos officiis debitis obcaecati vel quibusdam molestiae, error totam excepturi nostrum architecto fugit ut fugiat. Iste quaerat, animi ducimus illo voluptatem nihil deleniti a odit voluptatibus nostrum autem, et sequi vero molestiae nisi neque est. Nam vel facilis eos, temporibus aliquam atque dolore eveniet ipsam excepturi dignissimos sit, autem blanditiis quas illo eum commodi maiores? Delectus laudantium expedita autem, dicta distinctio ab? Repellendus quae magnam optio fuga sint obcaecati quod velit iure, facilis alias corporis eligendi.',
        //     'category_id' => 1,
        //     'user_id' => 2
        // ]);
        // Post::create([
        //     'tittle' => 'Judul ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus deserunt nostrum corporis qui tempore odio dignissimos provident,',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus deserunt nostrum corporis qui tempore odio dignissimos provident, tenetur dolore sequi velit quae ipsa, soluta officia beatae, labore eveniet. Illum deleniti sint architecto dolorem iure, praesentium dolor eum modi, doloremque adipisci nisi provident dignissimos perspiciatis reprehenderit consequatur voluptas earum hic aliquid fugiat at tempore dolores. Eos officiis debitis obcaecati vel quibusdam molestiae, error totam excepturi nostrum architecto fugit ut fugiat. Iste quaerat, animi ducimus illo voluptatem nihil deleniti a odit voluptatibus nostrum autem, et sequi vero molestiae nisi neque est. Nam vel facilis eos, temporibus aliquam atque dolore eveniet ipsam excepturi dignissimos sit, autem blanditiis quas illo eum commodi maiores? Delectus laudantium expedita autem, dicta distinctio ab? Repellendus quae magnam optio fuga sint obcaecati quod velit iure, facilis alias corporis eligendi.',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);Post::create([
        //     'tittle' => 'Judul ke empat',
        //     'slug' => 'judul-ke-empat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus deserunt nostrum corporis qui tempore odio dignissimos provident,',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus deserunt nostrum corporis qui tempore odio dignissimos provident, tenetur dolore sequi velit quae ipsa, soluta officia beatae, labore eveniet. Illum deleniti sint architecto dolorem iure, praesentium dolor eum modi, doloremque adipisci nisi provident dignissimos perspiciatis reprehenderit consequatur voluptas earum hic aliquid fugiat at tempore dolores. Eos officiis debitis obcaecati vel quibusdam molestiae, error totam excepturi nostrum architecto fugit ut fugiat. Iste quaerat, animi ducimus illo voluptatem nihil deleniti a odit voluptatibus nostrum autem, et sequi vero molestiae nisi neque est. Nam vel facilis eos, temporibus aliquam atque dolore eveniet ipsam excepturi dignissimos sit, autem blanditiis quas illo eum commodi maiores? Delectus laudantium expedita autem, dicta distinctio ab? Repellendus quae magnam optio fuga sint obcaecati quod velit iure, facilis alias corporis eligendi.',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
    }
}
