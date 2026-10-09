<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Database\Factories\AgentFactory;

class Agents extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected static function newFactory()
    {
        return AgentFactory::new();
    }
}