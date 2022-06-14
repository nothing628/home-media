<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;
use App\Models\Traits\UuidTrait;

class Video extends Model
{
    use HasFactory;
    use SoftDeletes;
    use UuidTrait;

    public $incrementing = false;
    protected $primaryKey = 'id';
    protected $keyType = 'string';

    public function getPublicPathAttribute()
    {
        $filepath = $this->filepath;
        $filename =  basename($filepath);

        return "public/".$filename;
    }
}
