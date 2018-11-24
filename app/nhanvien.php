<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class nhanvien extends Model
{
    protected $fillable =[
        'anh',
        'ten',
        'namsinh',
        'quequan',
        'nganhnghe',
        'kinhnghiem',
        'kinhnghiem_tomtat',
        'trang_thai',
    ];
}
