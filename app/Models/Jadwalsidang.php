<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Jadwalsidang
 * 
 * @property int $ID_SIDANG
 * @property string $mahasiswa_NIM
 * @property Carbon $WAKTU_SIDANG
 * @property int $STATUS_SIDANG
 * @property string $DOSEN_PENGUJI
 * @property Carbon|null $CREATED_AT
 * @property Carbon|null $UPDATED_AT
 * @property Carbon|null $DELETED_AT
 * 
 * @property Mahasiswa $mahasiswa
 * @property Collection|Dosen[] $dosens
 *
 * @package App\Models
 */
class Jadwalsidang extends Model
{
	protected $table = 'jadwal_sidangs';
	protected $primaryKey = 'ID_SIDANG';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'ID_SIDANG' => 'int',
		'STATUS_SIDANG' => 'int'
	];

	protected $dates = [
		'WAKTU_SIDANG',
		'CREATED_AT',
		'UPDATED_AT',
		'DELETED_AT'
	];

	protected $fillable = [
		'mahasiswa_NIM',
		'WAKTU_SIDANG',
		'STATUS_SIDANG',
		'DOSEN_PENGUJI',
		'CREATED_AT',
		'UPDATED_AT',
		'DELETED_AT'
	];

	public function mahasiswa()
	{
		return $this->belongsTo(Mahasiswa::class, 'mahasiswa_NIM');
	}

	public function dosens()
	{
		return $this->belongsToMany(Dosen::class, 'dosen_jadwalsidang', 'ID_SIDANG', 'NIP')
					->withPivot('NILAI', 'CREATED_AT', 'UPDATED_AT', 'DELETE_AT');
	}
}
