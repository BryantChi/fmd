<?php

namespace App\Models\Admin;

use Eloquent as Model;
use Illuminate\Database\Eloquent\Model as EloquentModel;
use Illuminate\Database\Eloquent\SoftDeletes;


/**
 * Class CaseInfo
 * @package App\Models\Admin
 * @version October 12, 2024, 5:48 pm UTC
 *
 * @property string $occupation
 * @property string $name
 * @property string $case_title
 * @property string $case_content
 */
class CaseInfo extends EloquentModel
{
    use SoftDeletes;


    public $table = 'case_infos';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'case_front_image',
        'name',
        'category',
        'case_title',
        'case_content',
        'case_pv'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'case_front_image' => 'json',
        'name' => 'string',
        'category' => 'string',
        'case_title' => 'string',
        'case_content' => 'string',
        'case_pv' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'case_front_image' => 'image|nullable|max:2048',
    ];

    public static $messages = [
        'case_front_image.image' => '請上傳圖片',
    ];

    public function incrementViews()
    {
        $this->increment('case_pv');
    }

}
