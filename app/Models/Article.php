<?php

namespace App\Models;

use App\Traits\HasAuthor;
use App\Traits\ModelHelpers;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;
    use HasAuthor;
    use ModelHelpers;

    const  TABLE = 'articles';

    protected  $table = SELF::TABLE;

    protected  $fillable =[
        'title',
        'slug',
        'description',
        'author_id'
    ];

    public function id():  string
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
