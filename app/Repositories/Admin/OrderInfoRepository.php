<?php

namespace App\Repositories\Admin;

use App\Models\Admin\OrderInfo;
use App\Repositories\BaseRepository;

/**
 * Class OrderInfoRepository
 * @package App\Repositories\Admin
 * @version December 8, 2024, 3:26 pm UTC
*/

class OrderInfoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'order_number',
        'name',
        'phone',
        'email',
        'city',
        'district',
        'zipcode',
        'address',
        'payment_method',
        'payment_status',
        'payment_details',
        'amount',
        'order_details'
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
        return OrderInfo::class;
    }
}
