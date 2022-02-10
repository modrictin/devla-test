<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{

    const STATUS_CREATED = 1;
    const STATUS_ADDRESS_SAVED = 2;
    const STATUS_COMPLETE = 3;

}
