<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable  = ['name','email']; //long version of protection - most protective way - tells what is fillable
}
