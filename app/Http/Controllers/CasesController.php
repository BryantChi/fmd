<?php

namespace App\Http\Controllers;

use App\Models\Admin\CaseCategoryInfo;
use App\Models\Admin\CaseInfo;
use App\Repositories\Admin\SeoSettingRepository;
use Illuminate\Http\Request;

class CasesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($category = null)
    {
        //
        $seoInfo = SeoSettingRepository::getInfo('/cases');

        $categoryInfo = CaseCategoryInfo::all();

        if ($category == null) {
            $caseInfos = CaseInfo::orderBy('created_at', 'desc')->paginate(10);
        } else {
            $caseInfos = CaseInfo::where('category', $category)->orderBy('created_at', 'desc')->paginate(10);
        }

        return view('cases')
            ->with('seoInfo' , $seoInfo)
            ->with('categoryId', $category)
            ->with('caseInfos', $caseInfos)
            ->with('categoryInfo', $categoryInfo);
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
     * @param  \App\Models\CaseInfo  $caseInfo
     * @return \Illuminate\Http\Response
     */
    public function show($id, $category = null)
    {
        //
        $seoInfo = SeoSettingRepository::getInfo('/cases');

        $caseInfo = CaseInfo::find($id);

        $categoryInfo = CaseCategoryInfo::all();

        $caseInfo->incrementViews();

        return view('cases_inner')
            ->with('seoInfo' , $seoInfo)
            ->with('categoryId', $category)
            ->with('caseInfo', $caseInfo)
            ->with('categoryInfo', $categoryInfo);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CaseInfo  $caseInfo
     * @return \Illuminate\Http\Response
     */
    public function edit(CaseInfo $caseInfo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CaseInfo  $caseInfo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CaseInfo $caseInfo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CaseInfo  $caseInfo
     * @return \Illuminate\Http\Response
     */
    public function destroy(CaseInfo $caseInfo)
    {
        //
    }
}
