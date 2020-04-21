<?php

namespace WSB_BANK;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Role extends Model
{
    public function users()
       {
        return $this-BelongsToMany('App\User');
       }

}
