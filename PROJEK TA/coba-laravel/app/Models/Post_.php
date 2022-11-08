<?php

namespace App\Models;



class Post 
{
    private static $blog_posts = [
        [
            "title" => "Judul  Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Ivan Aprialdo",
            "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quos commodi nostrum ex velit vitae, 
            sequi minima explicabo sapiente! Tempore, id tempora totam natus consequatur debitis explicabo laudantium. 
            At dolorum repudiandae voluptatum! Debitis officia praesentium expedita asperiores. 
            Voluptate consequatur vitae tempore cumque hic laborum nam. 
            Accusantium sed ipsam vero ut assumenda beatae minima similique velit incidunt maiores vel, 
            voluptate dignissimos aliquid id cumque hic ab ipsa illo! Quia temporibus dignissimos fugiat 
            unde ducimus quidem laudantium voluptatem, error nesciunt porro blanditiis inventore?"
        ],
        [
            "title" => "Judul  Post IvanAprialdo",
            "slug" => "judul-post-kedua",
            "author" => "Dody",
            "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nostrum unde ullam modi 
            perferendis quasi reprehenderit nam! Minus, cumque? Quod vero, iure asperiores 
            voluptates maiores voluptatem rerum corporis minima veritatis fugiat ipsa? 
            Eum nobis eos autem vero distinctio aperiam? Mollitia aspernatur voluptatibus 
            facere sequi veniam, tempora quas earum esse asperiores nobis modi vitae magni ipsa!
            Tempora, nemo, nihil laudantium iure beatae distinctio molestias harum ipsam dolores
            at doloribus accusamus quo pariatur error rerum delectus assumenda magni, 
            unde dolorum consequatur amet recusandae? Cupiditate, consectetur maxime. 
            Odit numquam natus at harum ad! Fugiat id ipsam repellendus optio aspernatur, 
            aliquid inventore perferendis eius voluptates."
        ],
    ] ;

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
}
}