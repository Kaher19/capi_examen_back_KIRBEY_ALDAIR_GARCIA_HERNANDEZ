<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserDomicilio extends Model
{
    use HasFactory;

    protected $table = 'user_domicilio';
    protected $id = 'user_id';

    protected $appends = array('edad');

    public function getEdadAttribute(){
        return Carbon::parse($this->fecha_nacimiento)->diff(Carbon::now())->y;
    }
}
