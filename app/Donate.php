<?php
/**
 * Created by PhpStorm.
 * User: DELL
 * Date: 3/25/2019
 * Time: 4:47 PM
 */

namespace App;

use Illuminate\Database\Eloquent\Model;

class Donate extends Model
{
    protected $table="donate";
    public $timestamps = false;
    protected $primaryKey='donate_id';
}