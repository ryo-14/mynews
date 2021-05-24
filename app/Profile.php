<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PROFILE extends Model
{
  
  //【応用】 Modelを作成するコマンドで Profile というModelを作成し、
  //名前(name)、性別(gender)、趣味(hobby)、自己紹介(introduction)に対してValidationをかけるようにしてみましょう
    protected $guarded = array('id');
    
    public static $rules = array(
      '名前(name)'=> 'required',
      '性別(gender)' => 'requried',
      '趣味(hobby)' => 'requried',
      '自己紹介(introduction)' => 'requried',
      );
}
