<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\CreateOrderInfoRequest;
use App\Http\Requests\Admin\UpdateOrderInfoRequest;
use App\Repositories\Admin\OrderInfoRepository;
use App\Http\Controllers\AppBaseController;
use App\Services\OrderServices;
use Illuminate\Http\Request;
use Flash;
use Response;

class OrderInfoController extends AppBaseController
{
    /** @var OrderInfoRepository $orderInfoRepository*/
    private $orderInfoRepository;

    public function __construct(OrderInfoRepository $orderInfoRepo)
    {
        $this->orderInfoRepository = $orderInfoRepo;
    }

    /**
     * Display a listing of the OrderInfo.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $orderInfos = $this->orderInfoRepository->paginate(10);

        return view('admin.order_infos.index')
            ->with('orderInfos', $orderInfos);
    }

    /**
     * Show the form for creating a new OrderInfo.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.order_infos.create');
    }

    /**
     * Store a newly created OrderInfo in storage.
     *
     * @param CreateOrderInfoRequest $request
     *
     * @return Response
     */
    public function store(CreateOrderInfoRequest $request)
    {
        $input = $request->all();

        $orderInfo = $this->orderInfoRepository->create($input);

        Flash::success('Order Info saved successfully.');

        return redirect(route('admin.orderInfos.index'));
    }

    /**
     * Display the specified OrderInfo.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $orderInfo = $this->orderInfoRepository->find($id);

        if (empty($orderInfo)) {
            Flash::error('Order Info not found');

            return redirect(route('admin.orderInfos.index'));
        }

        return view('admin.order_infos.show')->with('orderInfo', $orderInfo);
    }

    /**
     * Show the form for editing the specified OrderInfo.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $orderInfo = $this->orderInfoRepository->find($id);

        if (empty($orderInfo)) {
            Flash::error('Order Info not found');

            return redirect(route('admin.orderInfos.index'));
        }

        return view('admin.order_infos.edit')->with('orderInfo', $orderInfo);
    }

    /**
     * Update the specified OrderInfo in storage.
     *
     * @param int $id
     * @param UpdateOrderInfoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateOrderInfoRequest $request)
    {
        $orderInfo = $this->orderInfoRepository->find($id);

        if (empty($orderInfo)) {
            Flash::error('Order Info not found');

            return redirect(route('admin.orderInfos.index'));
        }

        $orderInfo = $this->orderInfoRepository->update($request->all(), $id);

        Flash::success('Order Info updated successfully.');

        return redirect(route('admin.orderInfos.index'));
    }

    /**
     * Remove the specified OrderInfo from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $orderInfo = $this->orderInfoRepository->find($id);

        if (empty($orderInfo)) {
            Flash::error('Order Info not found');

            return redirect(route('admin.orderInfos.index'));
        }

        $this->orderInfoRepository->delete($id);

        Flash::success('Order Info deleted successfully.');

        return redirect(route('admin.orderInfos.index'));
    }
}
