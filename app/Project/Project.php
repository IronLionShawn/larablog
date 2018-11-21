<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 11/20/18
 * Time: 2:32 PM
 */

namespace App\Project;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;


class Project extends Model
{
    protected $fillable = ['name', 'description'];
}