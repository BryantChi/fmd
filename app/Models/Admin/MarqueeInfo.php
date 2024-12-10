<?php

namespace App\Models\Admin;

use Eloquent as Model;
use Illuminate\Database\Eloquent\Model as EloquentModel;
use Illuminate\Database\Eloquent\SoftDeletes;


/**
 * Class MarqueeInfo
 * @package App\Models\Admin
 * @version October 12, 2024, 12:39 pm UTC
 *
 * @property string $marquee_text
 * @property boolean $used
 */
class MarqueeInfo extends EloquentModel
{
    use SoftDeletes;


    public $table = 'marquee_infos';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'marquee_text',
        'used'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'used' => 'boolean'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'marquee_text' => 'nullable'
    ];


}
