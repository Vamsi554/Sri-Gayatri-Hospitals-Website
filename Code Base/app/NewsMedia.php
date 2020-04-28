<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NewsMedia extends Model
{
  public $table = 'news_media';
  protected $primaryKey = 'newsmedia_id';
  public $incrementing = true;
  protected $dateFormat = 'Y-m-d H:i:s';
}
