<?php

namespace App\Models;

class Post 
{
    private static $blog_posts = [
        [
            "tittle" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Sandhika Galih",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur, illum et delectus necessitatibus mollitia vero! Neque magnam consectetur quaerat quia ex commodi praesentium iusto dolor, porro tenetur consequatur autem officia quos saepe. Accusamus id esse vitae, perferendis quia reprehenderit, repellat ea, vero ducimus porro nam impedit corrupti adipisci iusto harum? Veritatis numquam rem non quas unde consectetur aspernatur doloribus reiciendis libero ea? Ratione, incidunt dolores labore excepturi iusto ipsa accusamus pariatur exercitationem, error sit, animi ex? Optio, molestiae. Temporibus, delectus?"
        ],
        [
            "tittle" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Sulistyono",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis animi tempore consequatur qui placeat necessitatibus impedit ducimus assumenda beatae cum aut nihil, molestias cupiditate nobis exercitationem. Assumenda porro sapiente saepe ut ad eum autem quasi recusandae explicabo voluptate? Totam voluptas nobis qui nostrum, unde esse perferendis, libero dicta eius laudantium natus beatae officiis quaerat debitis soluta neque minima quo, reprehenderit ipsa cupiditate maiores eum pariatur? Nostrum at atque perferendis similique libero ipsum inventore quae, optio temporibus corrupti laudantium ad. Quisquam explicabo ipsum reprehenderit nostrum veniam, quis suscipit ad ab officiis. Accusantium harum enim vel consequatur ad autem, modi sed deleniti!"
        ]
        ];
    public static function all()
    {
        return collect(self::$blog_posts);
    }
    {
        $posts = static::all();
        // $post = [];
        // foreach($posts as $p){
        //     if($p["slug"] === $slug) {
        //         $post = $p;
        //     }
        // }
        return $posts->firstWhere('slug', $slug);
    }
}

