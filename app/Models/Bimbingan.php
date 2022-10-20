<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Bimbingan
 * 
 * @property int $ID_BIMBNIGAN
 * @property int $ta_ID_TA
 * @property Carbon $TGL_BIMBINGAN
 * @property string|null $KETERANGAN
 * @property string|null $kartu
 * @property Carbon $CREATED_AT
 * @property Carbon|null $UPDATED_AT
 * @property Carbon|null $DELETED_AT
 * 
 * @property TugasAkhir $tugas_akhir
 *
 * @package App\Models
 */
class Bimbingan extends Model
{
	protected $table = 'bimbingan';
	protected $primaryKey = 'ID_BIMBNIGAN';
	public $timestamps = false;

	protected $casts = [
		'ta_ID_TA' => 'int'
	];

	protected $dates = [
		'TGL_BIMBINGAN',
		'CREATED_AT',
		'UPDATED_AT',
		'DELETED_AT'
	];

	protected $fillable = [
		'ta_ID_TA',
		'TGL_BIMBINGAN',
		'KETERANGAN',
		'kartu',
		'CREATED_AT',
		'UPDATED_AT',
		'DELETED_AT'
	];

	public function tugas_akhir()
	{
		return $this->belongsTo(TugasAkhir::class, 'ta_ID_TA');
	}
}
