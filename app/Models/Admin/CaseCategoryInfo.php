<?php

namespace App\Models\Admin;

use Eloquent as Model;
use Illuminate\Database\Eloquent\Model as EloquentModel;
use Illuminate\Database\Eloquent\SoftDeletes;


/**
 * Class CaseCategoryInfo
 * @package App\Models\Admin
 * @version December 11, 2024, 6:42 am UTC
 *
 * @property string $name
 */
class CaseCategoryInfo extends EloquentModel
{
    use SoftDeletes;


    public $table = 'case_category_infos';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'name'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [

    ];


}
