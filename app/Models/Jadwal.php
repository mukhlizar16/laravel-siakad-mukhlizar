<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Jadwal extends Model
{
    use HasFactory;
    protected $table = 'jadwal';
    protected $fillable = ['mahasiswa_id', 'mk_id', 'waktu', 'tipe'];

    public function mahasiswa(): BelongsTo
    {
        return $this->belongsTo(User::class, 'mahasiswa_id');
    }
    public function matakuliah(): BelongsTo
    {
        return $this->belongsTo(Matakuliah::class, 'mk_id');
    }
}
