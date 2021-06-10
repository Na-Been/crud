<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\ModelStatus\HasStatuses;
use Yajra\Auditable\AuditableWithDeletesTrait;

class Blog extends BaseModel
{
    use AuditableWithDeletesTrait, SoftDeletes, HasStatuses;

    protected $fillable = [
        'name',
        'gender',
        'phone',
        'email',
        'address',
        'nation',
        'dob',
        'ed_bg',
        'contact_mode',
    ];

}
