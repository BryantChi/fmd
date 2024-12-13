<?php

namespace App\Models\Admin;

use Eloquent as Model;
use Illuminate\Database\Eloquent\Model as EloquentModel;
use Illuminate\Database\Eloquent\SoftDeletes;


/**
 * Class OrderInfo
 * @package App\Models\Admin
 * @version December 8, 2024, 3:26 pm UTC
 *
 * @property string $order_number
 * @property string $name
 * @property string $phone
 * @property string $email
 * @property string $city
 * @property string $district
 * @property string $zipcode
 * @property string $address
 * @property string $payment_method
 * @property string $payment_status
 * @property string $payment_details
 * @property number $amount
 * @property string $order_details
 */
class OrderInfo extends EloquentModel
{

    use SoftDeletes;


    public $table = 'order_infos';


    protected $dates = ['deleted_at'];

    const PAYMENT_METHOD = [
        'atm' => 'ATM轉帳匯款',
        'credit' => '線上刷卡'
    ];

    const PAYMENT_STATUS = [
        'pending' => '待付款',
        'paid' => '已付款',
        'failed' => '付款失敗',
    ];

    const ORDER_STATUS = [
        'pending' => '待處理',
        'completed' => '已完成',
        'canceled' => '已取消',
    ];

    public $fillable = [
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
        'order_details',
        'order_status',
        'third_party_ref',
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'order_number' => 'string',
        'name' => 'string',
        'phone' => 'string',
        'email' => 'string',
        'city' => 'string',
        'district' => 'string',
        'zipcode' => 'string',
        'address' => 'string',
        'payment_method' => 'string',
        'payment_status' => 'string',
        'amount' => 'decimal:2',
        'order_details' => 'json',
        'order_status' => 'string',
        'third_party_ref' => 'string',
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        // 'order_number' => 'required|unique:order_infos',
        'name' => 'nullable',
        'phone' => 'nullable',
        'email' => 'nullable',
        'city' => 'nullable',
        'district' => 'nullable',
        'zipcode' => 'nullable',
        'address' => 'nullable',
        'payment_method' => 'nullable',
        'payment_status' => 'nullable',
        'amount' => 'nullable',
        'order_details' => 'nullable',
        'order_status' => 'nullable',
        'third_party_ref' => 'nullable',
    ];

    public static $messages = [
        // 'order_number.unique' => '訂單編號已存在',
    ];


}
