<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class berkasPeserta extends Model
{
    use HasFactory;
    protected $visible = ['id_peserta','jalur_daftar','ftcpy_ijazah','ftcpy_akte','ftcpy_kk','ftcpy_skhun','ftcpy_rapot','ftcpy_hasil_tes'];
    protected $fillable = ['id_peserta','jalur_daftar','ftcpy_ijazah','ftcpy_akte','ftcpy_kk','ftcpy_skhun','ftcpy_rapot','ftcpy_hasil_tes'];
    public $timestamp = true;

    public function dataPeserta()
    {

        return $this->belongsTo('App\Models\dataPeserta', 'id');
    }
    public function image()
    {
    
    if ($this->ftcpy_ijazah && file_exists(public_path('image/berkasPeserta/' . $this->ftcpy_ijazah))) {
        return asset('image/berkasPeserta/' . $this->ftcpy_ijazah);
    } else {
        return asset('image/no_image.png');
    }
    if ($this->ftcpy_akte && file_exists(public_path('image/berkasPeserta/' . $this->ftcpy_akte))) {
        return asset('image/berkasPeserta/' . $this->ftcpy_akte);
    } else {
        return asset('image/no_image.png');
    }
    if ($this->ftcpy_kk && file_exists(public_path('image/berkasPeserta/' . $this->ftcpy_kk))) {
        return asset('image/berkasPeserta/' . $this->ftcpy_kk);
    } else {
        return asset('image/no_image.png');
    }

if ($this->ftcpy_skhun && file_exists(public_path('image/berkasPeserta/' . $this->ftcpy_skhun))) {
    return asset('image/berkasPeserta/' . $this->ftcpy_skhun);
} else {
    return asset('image/no_image.png');
}

if ($this->ftcpy_nilai_raport && file_exists(public_path('image/berkasPeserta/' . $this->ftcpy_nilai_raport))) {
    return asset('image/berkasPeserta/' . $this->ftcpy_nilai_raport);
} else {
    return asset('image/no_image.png');
}
    }

public function deleteImage()
{
    if ($this->ftcpy_ijazah && file_exists(public_path('image/berkasPeserta/' . $this->ftcpy_ijazah))) {
        return unlink(public_path('image/berkasPeserta/' . $this->ftcpy_ijazah));
    }
    if ($this->ftcpy_akte && file_exists(public_path('image/berkasPeserta/' . $this->ftcpy_akte))) {
        return unlink(public_path('image/berkasPeserta/' . $this->ftcpy_akte));
    }
    if ($this->ftcpy_kk && file_exists(public_path('image/berkasPeserta/' . $this->ftcpy_kk))) {
        return unlink(public_path('image/berkasPeserta/' . $this->ftcpy_kk));
    }
    if ($this->ftcpy_skhun && file_exists(public_path('image/berkasPeserta/' . $this->ftcpy_skhun))) {
        return unlink(public_path('image/berkasPeserta/' . $this->ftcpy_skhun));
    }
    if ($this->ftcpy_nilai_raport && file_exists(public_path('image/berkasPeserta/' . $this->ftcpy_nilai_raport))) {
        return unlink(public_path('image/berkasPeserta/' . $this->ftcpy_nilai_raport));
    }
}
}