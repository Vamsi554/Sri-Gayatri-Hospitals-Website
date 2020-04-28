<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
  public $table = 'gallery';
  protected $primaryKey = 'gallery_id';
  public $incrementing = true;
  protected $dateFormat = 'Y-m-d H:i:s';
}
