<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    /** @use HasFactory<\Database\Factories\TagFactory> */
    use HasFactory;

    // we can update the fillable properties or we would go into our AppServiceProvider.php file to Model::unguard();

    public function jobs(){
        return $this->belongsToMany(Job::class);
    }
}
