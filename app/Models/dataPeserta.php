<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Session;
use Illuminate\Database\Eloquent\Model;

class dataPeserta extends Model
{
   
    use HasFactory;
    protected $visible = ['nama', 'no_pendaftaran', 'tgl_daftar','jk','tempat_lahir','tgl_lahir','agama',
                          'asal_provinsi','asal_kab_kota','asal_kecamatan','asal_desa_kelurahan','alamat','kode_pos',
                          'jurusan','nama_ortu','pekerjaan_ortu','no_hp_ortu','alamat_ortu','status_verifikasi','status_kelulusan'];
    protected $fillable = ['nama', 'no_pendaftaran', 'tgl_daftar','jk','tempat_lahir','tgl_lahir','agama',
                           'asal_provinsi','asal_kab_kota','asal_kecamatan','asal_desa_kelurahan','alamat','kode_pos',
                           'jurusan','nama_ortu','pekerjaan_ortu','no_hp_ortu','alamat_ortu','status_verifikasi','status_kelulusan'];
    public $timestamp = true;

    public function berkasPeserta()
    {
        return $this->hasMany('App\Models\berkasPeserta', 'id_peserta');
    }
    public static function boot()
    {
        parent::boot();
        self::deleting(function($dataPeserta){
        // mengecek apakah peserta punya data
        if ($dataPeserta->berkasPeserta->count() > 0) {
            // menyiapkan pesan error
            $html = 'Anda tidak dapat menghapus Karena masih meiliki data :';
            $html .= '<ul>';
            foreach ($dataPeserta->berkasPeserta as $berkasPeserta) {
                $html .= "<li>$berkasPeserta->id_peserta</li>";
            }
            $html .= '</ul>';
            Session::flash("flash_notification", [
                "level"=>"danger",
                "message"=>$html
            ]);
            // membatalkan proses penghapusan
            return false;
        }
        });
    }
}
