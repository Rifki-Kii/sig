<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class schools extends Model
{
    use HasFactory;
    protected $fillable = ['nama', 'alamat','jenis_sekolah','status_sekolah','status_sekolah','akreditasi','website','longitude','latitude'];
}
