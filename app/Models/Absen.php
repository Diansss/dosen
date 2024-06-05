<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Absen extends Model
{
    use HasFactory;

    protected $table = 'absen';

    protected $fillable = [
        'nim',
        'name',
        'kelas',
        'id_matkul',
        'status',
        'bukti',
        'bukti_surat',
    ];

    public function matkul() : BelongsTo
    {
        return $this->belongsTo(Jadwal::class, 'id_matkul');
    }

}
