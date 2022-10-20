<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Idtum
 * 
 * @property int $id_ta
 *
 * @package App\Models
 */
class Idtum extends Model
{
	protected $table = 'idta';
	protected $primaryKey = 'id_ta';
	public $timestamps = false;
}
