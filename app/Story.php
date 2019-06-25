<?php
/**
 * Created by PhpStorm.
 * User: DELL
 * Date: 3/26/2019
 * Time: 2:56 PM
 */

namespace App;
use Illuminate\Database\Eloquent\Model;

class Story extends Model
{
    protected $table="story";
    protected $primaryKey='story_id';
    public $timestamps = false;
}