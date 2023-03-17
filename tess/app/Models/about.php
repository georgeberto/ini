<?php

namespace App\Models;

class about
{
    private static $about = [

        "nim" => "2301858093",
        "nama" => "Warren",
        "email" => "warren@binus.ac.id"
    ],
    [
        "nim" => "2440024390",
        "nama" => "Agung Sukmawan",
        "email" => "agung.sukmawan@binus.ac.id"
    ],
    [
        "nim" => "2440020253",
        "nama" => "George Gilberto Da Saviour",
        "email" => "george.galla@binus.ac.id"
    ],
    [
        "nim" => "2440098205",
        "nama" => "Arnaldi Arif",
        "email" => "arnaldi.arif@binus.ac.id"
    ],
    [
        "nim" => "2440107752",
        "nama" => "Muhammad Robih Octodhia",
        "email" => "muhammad.octodhia@binus.ac.id"
    ];

    public static function data()
    {
        return collect(self::$about);
    }
}
