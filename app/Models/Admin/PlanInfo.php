<?php

namespace App\Models\Admin;

use Eloquent as Model;
use Illuminate\Database\Eloquent\Model as EloquentModel;
use Illuminate\Database\Eloquent\SoftDeletes;


/**
 * Class PlanInfo
 * @package App\Models\Admin
 * @version November 28, 2024, 3:44 pm UTC
 *
 * @property string $plan_name
 * @property string $plan_sqm
 * @property string $plan_style_1
 * @property string $plan_style_2
 * @property string $plan_style_3
 * @property string $plan_style_4
 * @property integer $plan_price
 */
class PlanInfo extends EloquentModel
{
    use SoftDeletes;


    public $table = 'plan_infos';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'plan_name',
        'plan_sqm',
        'plan_style_1',
        'plan_style_2',
        'plan_style_3',
        'plan_style_4',
        'plan_price'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'plan_name' => 'string',
        'plan_sqm' => 'string',
        'plan_price' => 'integer',
        'plan_style_1' => 'json',
        'plan_style_2' => 'json',
        'plan_style_3' => 'json',
        'plan_style_4' => 'json'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'plan_name' => 'required|string|max:255',
        'plan_sqm' => 'nullable|string|max:255',
        'plan_style_1' => 'image|nullable|max:2048',
        'plan_style_2' => 'image|nullable|max:2048',
        'plan_style_3' => 'image|nullable|max:2048',
        'plan_style_4' => 'image|nullable|max:2048',
        'plan_price' => 'required|integer'
    ];

    public static $messages = [
        'plan_name.required' => '請輸入方案名稱',
        'plan_style_1.image' => '請上傳圖片',
        'plan_style_2.image' => '請上傳圖片',
        'plan_style_3.image' => '請上傳圖片',
        'plan_style_4.image' => '請上傳圖片',
        'plan_price.required' => '請輸入方案價格'
    ];


}
