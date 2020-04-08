<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
 //   protected $fillable = ['name']; - use with protective way, ie. bank application
 protected $guarded = []; //off guarded - table is empty - tells, which fields should be protected
}
