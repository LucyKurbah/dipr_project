<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    use HasFactory;

    protected $table = 'bill';

    public function advertisement()
    {
        return $this->belongsTo(Advertisement::class);
    }

    public function bill_type()
    {
        return $this->belongsTo(BillType::class);
    }
}
