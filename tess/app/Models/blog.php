<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class blog extends Model
{
    use HasFactory;
    private static $blog = [
        [
            "title" => "Web Programming",
            "author" => "By: Me",
            "paragraph" => "Lorem ipsum dolor sit amet, 
            consectetur adipiscing elit, sed do eiusmod tempor incididuntut
            labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident,
            sunt in culpa qui officia deserunt mollit anim id est laborum.",
            "slug" => "title-1"
        ],
        [
            "title" => "Laravel",
            "author" => "By: Me",
            "paragraph" => "Lorem ipsum dolor sit amet consectetur adipsicing elit. 
            Eveniet, sed sit architecto provident veritatis rerum 
            dolorum culpa quae, praesentium quaerata, aperiam cumque
            voluptates vero excepturi tenetur ipsa molestias magni!",
            "slug" => "title-2"
        ]
    ];

    public static function data(){
        return collect((self::$blog));
    }

    public static function search($slug){
        $contents = self::$blog;
        $content = [];
        foreach($contents as $a){
            if($slug === $a["slug"]){
                $content = $a;
            }
        }
        return $content;
    }
}
