<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TugasAkhir
 * 
 * @property int $ID_TA
 * @property string $mahasiswa_NIM
 * @property string $JUDUL_TA
 * @property Carbon|null $TGL_PENGAJUAN
 * @property string|null $laporan_awal
 * @property string|null $LAPORAN_FINAL_TA
 * @property string|null $LEMBAR_PENGESAHAN
 * @property Carbon|null $pengajuan_sidang
 * @property int $STATUS_TA
 * @property Carbon|null $CREATED_AT
 * @property Carbon|null $UPDATED_AT
 * @property Carbon|null $DELETED_AT
 * 
 * @property Mahasiswa $mahasiswa
 * @property Collection|Bimbingan[] $bimbingans
 * @property Collection|RiwayatRevisi[] $riwayat_revisis
 *
 * @package App\Models
 */
class TugasAkhir extends Model
{
	protected $table = 'tugas_akhir';
	protected $primaryKey = 'ID_TA';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'ID_TA' => 'int',
		'STATUS_TA' => 'int'
	];

	protected $dates = [
		'TGL_PENGAJUAN',
		'pengajuan_sidang',
		'CREATED_AT',
		'UPDATED_AT',
		'DELETED_AT'
	];

	protected $fillable = [
		'mahasiswa_NIM',
		'JUDUL_TA',
		'TGL_PENGAJUAN',
		'laporan_awal',
		'LAPORAN_FINAL_TA',
		'LEMBAR_PENGESAHAN',
		'pengajuan_sidang',
		'STATUS_TA',
		'CREATED_AT',
		'UPDATED_AT',
		'DELETED_AT'
	];

	public function mahasiswa()
	{
		return $this->belongsTo(Mahasiswa::class, 'mahasiswa_NIM');
	}

	public function bimbingans()
	{
		return $this->hasMany(Bimbingan::class, 'ta_ID_TA');
	}

	public function riwayat_revisis()
	{
		return $this->hasMany(RiwayatRevisi::class, 'ID_TA');
	}
}
