<?php

namespace Lidai\ImageUp\Tests\Models;

use Illuminate\Database\Eloquent\Model;
use Lidai\ImageUp\HasImageUploads;

class User extends Model
{
    use HasImageUploads;

    protected $guarded = [];

    protected $connection = 'testbench';
    public $table = 'users';
}
