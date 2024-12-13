<?php

namespace App\Repositories\Admin;

use App\Models\Admin\CaseCategoryInfo;
use App\Repositories\BaseRepository;

/**
 * Class CaseCategoryInfoRepository
 * @package App\Repositories\Admin
 * @version December 11, 2024, 6:42 am UTC
*/

class CaseCategoryInfoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name'
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
        return CaseCategoryInfo::class;
    }
}
