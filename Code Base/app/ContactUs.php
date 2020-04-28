<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContactUs extends Model
{
    public $table = 'contact';
    protected $primaryKey = 'contact_id';
    public $incrementing = true;
    protected $dateFormat = 'Y-m-d H:i:s';
}
