<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Paa
 * 
 * @property int $ID_PAA
 * @property string $NAMA_PAA
 * @property string|null $EMAIL_PAA
 * @property int|null $NO_TLP_PAA
 * @property string|null $ALAMAT_PAA
 * @property string $PASSWORD
 * @property Carbon|null $UPDATED_AT
 * @property Carbon|null $CREATED_AT
 * @property Carbon|null $DELETED_AT
 *
 * @package App\Models
 */
class Paa extends Model
{
	protected $table = 'paa';
	protected $primaryKey = 'ID_PAA';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'ID_PAA' => 'int',
		'NO_TLP_PAA' => 'int'
	];

	protected $dates = [
		'UPDATED_AT',
		'CREATED_AT',
		'DELETED_AT'
	];

	protected $fillable = [
		'NAMA_PAA',
		'EMAIL_PAA',
		'NO_TLP_PAA',
		'ALAMAT_PAA',
		'PASSWORD',
		'UPDATED_AT',
		'CREATED_AT',
		'DELETED_AT'
	];
}
