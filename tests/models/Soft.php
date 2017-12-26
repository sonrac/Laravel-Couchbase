<?php

use sonrac\Couchbase\Eloquent\Model as Eloquent;
use sonrac\Couchbase\Eloquent\SoftDeletes;

class Soft extends Eloquent
{
    use SoftDeletes;

    protected $table = 'soft';
    protected static $unguarded = true;
    protected $dates = ['deleted_at'];
}
