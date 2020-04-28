<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CaseStudies extends Model
{
  public $table = 'case_studies';
  protected $primaryKey = 'casestudy_id';
  public $incrementing = true;
  protected $dateFormat = 'Y-m-d H:i:s';
}
