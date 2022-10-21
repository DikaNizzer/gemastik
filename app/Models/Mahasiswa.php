<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Mahasiswa
 * 
 * @property string $NIM
 * @property string $dosen_NIP
 * @property string $NAMA_MHS
 * @property string|null $EMAIL_MHS
 * @property string|null $NO_TLP_MHS
 * @property string|null $ALAMAT_MHS
 * @property string $PASSWORD_MHS
 * @property Carbon|null $UPDATED_AT
 * @property Carbon|null $CREATED_AT
 * @property Carbon|null $DELETED_AT
 * 
 * @property Dosen $dosen
 * @property Collection|Jadwalsidang[] $jadwalsidangs
 * @property Collection|TugasAkhir[] $tugas_akhirs
 *
 * @package App\Models
 */
class Mahasiswa extends Model
{
	protected $table = 'mahasiswas';
	protected $primaryKey = 'NIM';
	public $incrementing = false;
	public $timestamps = false;

	protected $dates = [
		'UPDATED_AT',
		'CREATED_AT',
		'DELETED_AT'
	];

	protected $fillable = [
		'dosen_NIP',
		'NAMA_MHS',
		'EMAIL_MHS',
		'NO_TLP_MHS',
		'ALAMAT_MHS',
		'PASSWORD_MHS',
		'UPDATED_AT',
		'CREATED_AT',
		'DELETED_AT'
	];

	public function dosen()
	{
		return $this->belongsTo(Dosen::class, 'dosen_NIP');
	}

	public function jadwalsidangs()
	{
		return $this->hasMany(Jadwalsidang::class, 'mahasiswa_NIM');
	}

	public function tugas_akhirs()
	{
		return $this->hasMany(TugasAkhir::class, 'mahasiswa_NIM');
	}
}
