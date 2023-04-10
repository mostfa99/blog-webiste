<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;

    protected $primaryKey = 'name';
    protected $KeyType = 'string';
    public $incrementing = false;
    public $timestamps = false;

    protected $fillable = [
        'name', 'value',
    ];

    public function getValue($name, $defult = null)
    {
        $config = static::find($name);
        if (!$config) {
            return $defult;
        }
        return $config->value;
    }
    public function setValue($name, $value)
    {
        return static::query()->updateOrCreate([
            'name' => $name,
        ], [
            'value' => $value,
        ]);
    }
}
