<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class DosenJadwalsidang
 * 
 * @property string $NIP
 * @property int $ID_SIDANG
 * @property string $NILAI
 * @property Carbon $CREATED_AT
 * @property Carbon|null $UPDATED_AT
 * @property Carbon|null $DELETE_AT
 * 
 * @property Dosen $dosen
 * @property Jadwalsidang $jadwalsidang
 *
 * @package App\Models
 */
class DosenJadwalsidang extends Model
{
	protected $table = 'dosen_jadwal_sidangs';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'ID_SIDANG' => 'int'
	];

	protected $dates = [
		'CREATED_AT',
		'UPDATED_AT',
		'DELETE_AT'
	];

	protected $fillable = [
		'NILAI',
		'CREATED_AT',
		'UPDATED_AT',
		'DELETE_AT'
	];

	public function dosen()
	{
		return $this->belongsTo(Dosen::class, 'NIP');
	}

	public function jadwalsidang()
	{
		return $this->belongsTo(Jadwalsidang::class, 'ID_SIDANG');
	}
}
