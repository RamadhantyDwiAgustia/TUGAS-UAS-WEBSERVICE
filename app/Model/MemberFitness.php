<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class MemberFitness extends Model
{
    //
    use Notifiable;

    protected $fillable = [
        'nama_member','no_hp','alamat','kode_boking','paket_member','paket_fitnes','password'
    ];
}
