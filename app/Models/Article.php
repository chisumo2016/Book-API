<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    const  TABLE = 'articles';

    protected  $table = SELF::TABLE;

    protected  $fillable =[
        'title',
        'slug',
        'description',
        'author_id'
    ];

    public function id():string
    {
        return  (string) $this->id;
    }
    public function title():string
    {
        return  $this->title;
    }

    public function slug():string
    {
        return $this->slug;
    }

    public function description():string
    {
        return  $this->description;
    }
}
