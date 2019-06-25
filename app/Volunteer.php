<?php
/**
 * Created by PhpStorm.
 * User: DELL
 * Date: 3/26/2019
 * Time: 2:35 PM
 */

namespace App;
use Illuminate\Database\Eloquent\Model;

class Volunteer extends Model
{
    protected $table = "volunteer";
    public $timestamps = false;
    protected $fillable = [
        'firstname', 'lastname','purpose', 'phone', 'email','active'
    ];
    protected $primaryKey='volunteer_id';
}
