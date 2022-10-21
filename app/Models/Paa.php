<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;


class Paa extends Authenticatable 
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
