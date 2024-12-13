<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\CreateCaseCategoryInfoRequest;
use App\Http\Requests\Admin\UpdateCaseCategoryInfoRequest;
use App\Repositories\Admin\CaseCategoryInfoRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class CaseCategoryInfoController extends AppBaseController
{
    /** @var CaseCategoryInfoRepository $caseCategoryInfoRepository*/
    private $caseCategoryInfoRepository;

    public function __construct(CaseCategoryInfoRepository $caseCategoryInfoRepo)
    {
        $this->caseCategoryInfoRepository = $caseCategoryInfoRepo;
    }

    /**
     * Display a listing of the CaseCategoryInfo.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $caseCategoryInfos = $this->caseCategoryInfoRepository->paginate(10);

        return view('admin.case_category_infos.index')
            ->with('caseCategoryInfos', $caseCategoryInfos);
    }

    /**
     * Show the form for creating a new CaseCategoryInfo.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.case_category_infos.create');
    }

    /**
     * Store a newly created CaseCategoryInfo in storage.
     *
     * @param CreateCaseCategoryInfoRequest $request
     *
     * @return Response
     */
    public function store(CreateCaseCategoryInfoRequest $request)
    {
        $input = $request->all();

        $caseCategoryInfo = $this->caseCategoryInfoRepository->create($input);

        Flash::success('Case Category Info saved successfully.');

        return redirect(route('admin.caseCategoryInfos.index'));
    }

    /**
     * Display the specified CaseCategoryInfo.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $caseCategoryInfo = $this->caseCategoryInfoRepository->find($id);

        if (empty($caseCategoryInfo)) {
            Flash::error('Case Category Info not found');

            return redirect(route('admin.caseCategoryInfos.index'));
        }

        return view('admin.case_category_infos.show')->with('caseCategoryInfo', $caseCategoryInfo);
    }

    /**
     * Show the form for editing the specified CaseCategoryInfo.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $caseCategoryInfo = $this->caseCategoryInfoRepository->find($id);

        if (empty($caseCategoryInfo)) {
            Flash::error('Case Category Info not found');

            return redirect(route('admin.caseCategoryInfos.index'));
        }

        return view('admin.case_category_infos.edit')->with('caseCategoryInfo', $caseCategoryInfo);
    }

    /**
     * Update the specified CaseCategoryInfo in storage.
     *
     * @param int $id
     * @param UpdateCaseCategoryInfoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCaseCategoryInfoRequest $request)
    {
        $caseCategoryInfo = $this->caseCategoryInfoRepository->find($id);

        if (empty($caseCategoryInfo)) {
            Flash::error('Case Category Info not found');

            return redirect(route('admin.caseCategoryInfos.index'));
        }

        $caseCategoryInfo = $this->caseCategoryInfoRepository->update($request->all(), $id);

        Flash::success('Case Category Info updated successfully.');

        return redirect(route('admin.caseCategoryInfos.index'));
    }

    /**
     * Remove the specified CaseCategoryInfo from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $caseCategoryInfo = $this->caseCategoryInfoRepository->find($id);

        if (empty($caseCategoryInfo)) {
            Flash::error('Case Category Info not found');

            return redirect(route('admin.caseCategoryInfos.index'));
        }

        $this->caseCategoryInfoRepository->delete($id);

        Flash::success('Case Category Info deleted successfully.');

        return redirect(route('admin.caseCategoryInfos.index'));
    }
}
