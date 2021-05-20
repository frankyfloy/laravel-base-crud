<?php

use Illuminate\Database\Seeder;
use App\Comic;

class ComicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){

        $comics = config('comics');

        for ($i=0; $i < count($comics) ; $i++) {
            // Oggetto iterazione
            $comic = $comics[$i];

            // Nuovo oggetto Row Table
            $comicObj = new Comic();

            $comicObj->title = $comic['title'];
            $comicObj->description = $comic['description'];
            $comicObj->thumb = $comic["thumb"];
            $comicObj->price = $comic["price"];
            $comicObj->series = $comic["series"];
            $comicObj->sale_date = $comic["sale_date"];
            $comicObj->type = $comic["type"];
            $comicObj->save();
        }
    }
}
