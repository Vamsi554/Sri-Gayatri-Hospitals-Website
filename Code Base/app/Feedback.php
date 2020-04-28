<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
  public $table = 'feedback';
  protected $primaryKey = 'feedback_id';
  public $incrementing = true;
  protected $dateFormat = 'Y-m-d H:i:s';
}
