<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\CreatePlanInfoRequest;
use App\Http\Requests\Admin\UpdatePlanInfoRequest;
use App\Repositories\Admin\PlanInfoRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\File;
use Flash;
use Response;

class PlanInfoController extends AppBaseController
{
    /** @var PlanInfoRepository $planInfoRepository*/
    private $planInfoRepository;

    public function __construct(PlanInfoRepository $planInfoRepo)
    {
        $this->planInfoRepository = $planInfoRepo;
    }

    /**
     * Display a listing of the PlanInfo.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $planInfos = $this->planInfoRepository->paginate(10);

        return view('admin.plan_infos.index')
            ->with('planInfos', $planInfos);
    }

    /**
     * Show the form for creating a new PlanInfo.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.plan_infos.create');
    }

    /**
     * Store a newly created PlanInfo in storage.
     *
     * @param CreatePlanInfoRequest $request
     *
     * @return Response
     */
    public function store(CreatePlanInfoRequest $request)
    {
        $input = $request->all();

        // 圖片處理
        $input['plan_style_1'] = $this->processImage($request->file('plan_style_1'), 'plan_style');
        $input['plan_style_2'] = $this->processImage($request->file('plan_style_2'), 'plan_style');
        $input['plan_style_3'] = $this->processImage($request->file('plan_style_3'), 'plan_style');
        $input['plan_style_4'] = $this->processImage($request->file('plan_style_4'), 'plan_style');

        $planInfo = $this->planInfoRepository->create($input);

        Flash::success('Plan Info saved successfully.');

        return redirect(route('admin.planInfos.index'));
    }

    /**
     * Display the specified PlanInfo.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $planInfo = $this->planInfoRepository->find($id);

        if (empty($planInfo)) {
            Flash::error('Plan Info not found');

            return redirect(route('admin.planInfos.index'));
        }

        return view('admin.plan_infos.show')->with('planInfo', $planInfo);
    }

    /**
     * Show the form for editing the specified PlanInfo.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $planInfo = $this->planInfoRepository->find($id);

        if (empty($planInfo)) {
            Flash::error('Plan Info not found');

            return redirect(route('admin.planInfos.index'));
        }

        return view('admin.plan_infos.edit')->with('planInfo', $planInfo);
    }

    /**
     * Update the specified PlanInfo in storage.
     *
     * @param int $id
     * @param UpdatePlanInfoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePlanInfoRequest $request)
    {
        $planInfo = $this->planInfoRepository->find($id);

        if (empty($planInfo)) {
            Flash::error('Plan Info not found');

            return redirect(route('admin.planInfos.index'));
        }

        $input = $request->all();

        // 圖片處理
        $input['plan_style_1'] = $this->handleImageUpload($request->file('plan_style_1'), $planInfo['plan_style_1'], 'plan_style');
        $input['plan_style_2'] = $this->handleImageUpload($request->file('plan_style_2'), $planInfo['plan_style_2'], 'plan_style');
        $input['plan_style_3'] = $this->handleImageUpload($request->file('plan_style_3'), $planInfo['plan_style_3'], 'plan_style');
        $input['plan_style_4'] = $this->handleImageUpload($request->file('plan_style_4'), $planInfo['plan_style_4'], 'plan_style');


        $planInfo = $this->planInfoRepository->update($input, $id);

        Flash::success('Plan Info updated successfully.');

        return redirect(route('admin.planInfos.index'));
    }

    /**
     * Remove the specified PlanInfo from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $planInfo = $this->planInfoRepository->find($id);

        if (empty($planInfo)) {
            Flash::error('Plan Info not found');

            return redirect(route('admin.planInfos.index'));
        }

        $this->planInfoRepository->delete($id);

        Flash::success('Plan Info deleted successfully.');

        return redirect(route('admin.planInfos.index'));
    }


    // 共用的圖片處理函式
    function processImage($image, $uploadDir, $resizeWidth = 800, $quality = 75)
    {
        if ($image) {
            $path = public_path('uploads/images/' . $uploadDir) . '/';
            $filename = time() . '_' . $image->getClientOriginalName();

            if (!file_exists($path)) {
                mkdir($path, 0755, true);
            }

            // 壓縮圖片
            $image = Image::make($image)
                ->orientate()
                ->resize($resizeWidth, null, function ($constraint) {
                    $constraint->aspectRatio();
                    $constraint->upsize();
                })
                ->encode('jpg', $quality); // 設定 JPG 格式和品質
            $image->save($path . $filename);

            return 'images/' . $uploadDir . '/' . $filename;
        }

        return '';
    }

    // 共用圖片處理函式
    function handleImageUpload($newImage, $existingImagePath, $uploadDir, $resizeWidth = 800, $quality = 75)
    {
        if ($newImage) {
            $path = public_path('uploads/images/' . $uploadDir . '/');
            $filename = time() . '_' . $newImage->getClientOriginalName();

            // 確保目錄存在
            if (!file_exists($path)) {
                mkdir($path, 0755, true);
            }

            // 若已有圖片，刪除舊圖片
            if (!empty($existingImagePath) && File::exists(public_path('uploads/' . $existingImagePath))) {
                File::delete(public_path('uploads/' . $existingImagePath));
            }

            // 壓縮並保存新圖片
            $image = Image::make($newImage)
                ->orientate()
                ->resize($resizeWidth, null, function ($constraint) {
                    $constraint->aspectRatio();
                    $constraint->upsize();
                })
                ->encode('jpg', $quality); // 設定 JPG 格式和品質
            $image->save($path . $filename);

            return 'images/' . $uploadDir . '/' . $filename;
        }

        // 若無新圖片，返回舊圖片路徑
        return $existingImagePath;
    }
}
