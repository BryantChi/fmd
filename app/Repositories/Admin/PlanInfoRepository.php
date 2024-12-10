<?php

namespace App\Repositories\Admin;

use App\Models\Admin\PlanInfo;
use App\Repositories\BaseRepository;

/**
 * Class PlanInfoRepository
 * @package App\Repositories\Admin
 * @version November 28, 2024, 3:44 pm UTC
*/

class PlanInfoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'plan_name',
        'plan_sqm',
        'plan_style_1',
        'plan_style_2',
        'plan_style_3',
        'plan_style_4',
        'plan_price'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return PlanInfo::class;
    }
}
