<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use App\Models\Mahasiswa;
use App\Models\Jadwalsidang;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Collection;

/**
 * Class Dosen
 * 
 * @property string $NIP
 * @property string $NAMA_DOSEN
 * @property string|null $EMAIL_DOSEN
 * @property int|null $NO_TLP_DOSEN
 * @property string|null $ALAMAT_DOSEN
 * @property string $PASSWORD_DOSEN
 * @property Carbon|null $UPDATED_AT
 * @property Carbon|null $CREATED_AT
 * @property Carbon|null $DELETED_AT
 * 
 * @property Collection|Jadwalsidang[] $jadwalsidangs
 * @property Collection|Mahasiswa[] $mahasiswas
 *
 * @package App\Models
 */
class Dosen extends Model
{
	protected $table = 'dosens';
	protected $primaryKey = 'NIP';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'NO_TLP_DOSEN' => 'int'
	];

	protected $dates = [
		'UPDATED_AT',
		'CREATED_AT',
		'DELETED_AT'
	];

	protected $fillable = [
		'NIP',
		'NAMA_DOSEN',
		'EMAIL_DOSEN',
		'NO_TLP_DOSEN',
		'ALAMAT_DOSEN',
		'PASSWORD_DOSEN',
		'UPDATED_AT',
		'CREATED_AT',
		'DELETED_AT'
	];

	public function jadwalsidangs()
	{
		return $this->belongsToMany(Jadwalsidang::class, 'dosen_jadwalsidang', 'NIP', 'ID_SIDANG')
					->withPivot('NILAI', 'CREATED_AT', 'UPDATED_AT', 'DELETE_AT');
	}

	public function mahasiswas()
	{
		return $this->hasMany(Mahasiswa::class, 'dosen_NIP');
	}
}
