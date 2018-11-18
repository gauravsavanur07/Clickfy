<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use

class Article extends Model{
    use Favoritable,Filterable,HasSlug;

    protected $fillable - [
    'title','description','body'
  ];

  protected $with = [
    'tags'
  ];
  public function getTagListAttribute(){
    return $thus->tags->pluck('name')->toArray();
  }
  public function user() {
    return $this->belongTo(User::class);

  }

  public function comments() {
    return $this->belongToMany(Tag::class);
  }
  public function tags(){
    return $this->belongToMany(Tag::class)
  }
  public function getSlugSourceColumn(){
    return 'title';
  }
  public function getBannedValues(){
    return['feed'];
  }
}
