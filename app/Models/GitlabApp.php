<?php

namespace App\Models;

class GitlabApp extends BaseModel
{
    public function applications()
    {
        return $this->morphMany(Application::class, 'source');
    }
    public function privateKey()
    {
        return $this->belongsTo(PrivateKey::class);
    }
}
