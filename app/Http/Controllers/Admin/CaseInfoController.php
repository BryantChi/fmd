<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\CreateCaseInfoRequest;
use App\Http\Requests\Admin\UpdateCaseInfoRequest;
use App\Repositories\Admin\CaseInfoRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\File;
use Response;

class CaseInfoController extends AppBaseController
{
    /** @var CaseInfoRepository $caseInfoRepository*/
    private $caseInfoRepository;

    public function __construct(CaseInfoRepository $caseInfoRepo)
    {
        $this->caseInfoRepository = $caseInfoRepo;
    }

    /**
     * Display a listing of the CaseInfo.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $caseInfos = $this->caseInfoRepository->paginate(10);

        return view('admin.case_infos.index')
            ->with('caseInfos', $caseInfos);
    }

    /**
     * Show the form for creating a new CaseInfo.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.case_infos.create');
    }

    /**
     * Store a newly created CaseInfo in storage.
     *
     * @param CreateCaseInfoRequest $request
     *
     * @return Response
     */
    public function store(CreateCaseInfoRequest $request)
    {
        $input = $request->all();

        $input['case_front_image'] = $this->processImage($request->file('case_front_image'), 'case_front_image');

        $caseInfo = $this->caseInfoRepository->create($input);

        Flash::success('Case Info saved successfully.');

        return redirect(route('admin.caseInfos.index'));
    }

    /**
     * Display the specified CaseInfo.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $caseInfo = $this->caseInfoRepository->find($id);

        if (empty($caseInfo)) {
            Flash::error('Case Info not found');

            return redirect(route('admin.caseInfos.index'));
        }

        return view('admin.case_infos.show')->with('caseInfo', $caseInfo);
    }

    /**
     * Show the form for editing the specified CaseInfo.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $caseInfo = $this->caseInfoRepository->find($id);

        if (empty($caseInfo)) {
            Flash::error('Case Info not found');

            return redirect(route('admin.caseInfos.index'));
        }

        return view('admin.case_infos.edit')->with('caseInfo', $caseInfo);
    }

    /**
     * Update the specified CaseInfo in storage.
     *
     * @param int $id
     * @param UpdateCaseInfoRequest $request
     *
     * @return Response
     */
    public function update(UpdateCaseInfoRequest $request, $id)
    {
        $caseInfo = $this->caseInfoRepository->find($id);

        if (empty($caseInfo)) {
            Flash::error('Case Info not found');

            return redirect(route('admin.caseInfos.index'));
        }

        $input = $request->all();

        $input['case_front_image'] = $this->handleImageUpload($request->file('case_front_image'), $caseInfo['case_front_image'], 'case_front_image');

        $caseInfo = $this->caseInfoRepository->update($input, $id);

        Flash::success('Case Info updated successfully.');

        return redirect(route('admin.caseInfos.index'));
    }

    /**
     * Remove the specified CaseInfo from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $caseInfo = $this->caseInfoRepository->find($id);

        if (empty($caseInfo)) {
            Flash::error('Case Info not found');

            return redirect(route('admin.caseInfos.index'));
        }

        $this->caseInfoRepository->delete($id);

        Flash::success('Case Info deleted successfully.');

        return redirect(route('admin.caseInfos.index'));
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
