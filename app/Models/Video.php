<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use App\Models\Traits\UuidTrait;

class Video extends Model
{
    use HasFactory;
    use SoftDeletes;
    use UuidTrait;

    public $incrementing = false;
    protected $primaryKey = 'id';
    protected $keyType = 'string';

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = ['thumb_url', 'media_playlist_url', 'created'];

    public function getPublicPathAttribute()
    {
        $filepath = $this->filepath;
        $filename =  basename($filepath);

        return "public/".$filename;
    }

    public function getMediaPlaylistUrlAttribute()
    {
        return Storage::url($this->master_playlist_path);
    }

    public function getThumbUrlAttribute()
    {
        return Storage::url($this->thumb_path);
    }

    public function getCreatedAttribute()
    {
        return $this->created_at->diffForHumans();
    }
}
