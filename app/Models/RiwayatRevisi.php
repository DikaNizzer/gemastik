<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class RiwayatRevisi
 * 
 * @property int $ID_REVISI
 * @property int $ID_TA
 * @property Carbon $TANGGAL_REVISI
 * @property string $KETERANGAN_REVISI
 * @property string $PEMBERI_REVISI
 * @property string $LAPORAN_TA
 * @property Carbon|null $CREATED_AT
 * @property Carbon|null $UPDATE_AT
 * @property Carbon|null $DELETED_AT
 * 
 * @property TugasAkhir $tugas_akhir
 *
 * @package App\Models
 */
class RiwayatRevisi extends Model
{
	protected $table = 'riwayat_revisi';
	protected $primaryKey = 'ID_REVISI';
	public $timestamps = false;

	protected $casts = [
		'ID_TA' => 'int'
	];

	protected $dates = [
		'TANGGAL_REVISI',
		'CREATED_AT',
		'UPDATE_AT',
		'DELETED_AT'
	];

	protected $fillable = [
		'ID_TA',
		'TANGGAL_REVISI',
		'KETERANGAN_REVISI',
		'PEMBERI_REVISI',
		'LAPORAN_TA',
		'CREATED_AT',
		'UPDATE_AT',
		'DELETED_AT'
	];

	public function tugas_akhir()
	{
		return $this->belongsTo(TugasAkhir::class, 'ID_TA');
	}
}
