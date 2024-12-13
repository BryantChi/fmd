<?php

namespace App\Http\Controllers;

use App\Http\Requests\Admin\CreateOrderInfoRequest;
use App\Models\Admin\OrderInfo;
use App\Models\Admin\PlanInfo;
use App\Repositories\Admin\SeoSettingRepository;
use App\Services\OrderServices;
use GuzzleHttp\Promise\Create;
use Illuminate\Http\Request;
use PhpOffice\PhpSpreadsheet\Calculation\MathTrig\Sum;

class OrderOnlineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $seoInfo = SeoSettingRepository::getInfo('/order_online');

        return view('order_online')->with('seoInfo', $seoInfo)->with('planInfo', PlanInfo::all());
    }

    public function submit(CreateOrderInfoRequest $request, OrderServices $orderServices)
    {
        $planInfo = PlanInfo::all();

        $input = $request->all();

        $order_number = $orderServices->generateOrderNumber();

        $order_style_a = $input['order_style_a'] ?? null;
        $order_style_a_space = $input['order_style_a_space'] ?? null;
        $order_style_b = $input['order_style_b'] ?? null;
        $order_style_b_space = $input['order_style_b_space'] ?? null;
        $order_style_c = $input['order_style_c'] ?? null;
        $order_style_c_space = $input['order_style_c_space'] ?? null;

        $order_details = json_encode([
            'plan_a' => [
                'id' => $planInfo[0]->id ?? null,
                'style' => $order_style_a,
                'space' => $order_style_a_space,
                'price' => $planInfo[0]->plan_price ?? 0,
            ],
            'plan_b' => [
                'id' => $planInfo[1]->id ?? null,
                'style' => $order_style_b,
                'space' => $order_style_b_space,
                'price' => $planInfo[1]->plan_price ?? 0,
            ],
            'plan_c' => [
                'id' => $planInfo[2]->id ?? null,
                'style' => $order_style_c,
                'space' => $order_style_c_space,
                'price' => $planInfo[2]->plan_price ?? 0,
            ]
        ]);

        $amount = 0;
        if($order_style_a != null && $order_style_a_space != null){
            $amount += $planInfo[0]->plan_price ?? 0;
        }

        if($order_style_b != null && $order_style_b_space != null){
            $amount += $planInfo[1]->plan_price ?? 0;
        }

        if($order_style_c != null && $order_style_c_space != null){
            $amount += $planInfo[2]->plan_price ?? 0;
        }

        $order = new OrderInfo();
        $order->order_number = $order_number;
        $order->name = $input['name'] ?? null;
        $order->phone = $input['phone'] ?? null;
        $order->email = $input['email'] ?? null;
        $order->city = $input['city'] ?? null;
        $order->district = $input['district'] ?? null;
        $order->zipcode = $input['zipcode'] ?? null;
        $order->address = $input['address'] ?? null;
        $order->payment_method = $input['payment_method'] ?? null;
        $order->amount = $amount;
        $order->order_details = $order_details ?? null;
        $order->order_note = $input['order_note'] ?? null;
        $order->save();

        // 取得剛儲存的 ID
        $orderId = $order->id;

        // 取得完整的 OrderInfo 物件
        $savedOrder = $order;

        if ($savedOrder->payment_method == 'atm') {
            return redirect()->route('order_pay_atm', ['order' => $savedOrder->order_number]);
        }

        // if ($savedOrder->payment_method == 'credit') {
        //     return redirect()->route('order_pay_credit', ['orderInfo' => $savedOrder]);
        // }
    }

    public function atm()
    {
        $order = request('order') ?? null;

        $seoInfo = SeoSettingRepository::getInfo('/order_pay_atm');

        $orderInfo = OrderInfo::where('order_number', $order)->first();
        return view('order_pay_atm', ['orderInfo' => $orderInfo, 'seoInfo' => $seoInfo]);
    }


    public function updateOrder(Request $request, $id)
    {
        $order = OrderInfo::findOrFail($id);

        $order->update($request->input('updates'));

        return response()->json([
            'message' => 'Order updated successfully',
            'order' => $order,
        ], 200);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Admin\OrderInfo  $orderInfo
     * @return \Illuminate\Http\Response
     */
    public function show(OrderInfo $orderInfo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admin\OrderInfo  $orderInfo
     * @return \Illuminate\Http\Response
     */
    public function edit(OrderInfo $orderInfo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Admin\OrderInfo  $orderInfo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, OrderInfo $orderInfo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Admin\OrderInfo  $orderInfo
     * @return \Illuminate\Http\Response
     */
    public function destroy(OrderInfo $orderInfo)
    {
        //
    }
}
