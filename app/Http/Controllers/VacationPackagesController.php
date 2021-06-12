<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use app\Models\VacationPackages;
use App\Models\PackageFeedback;


class VacationPackagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vacation=VacationPackages::orderBy('package_name')->get;
        $vac_feedback=PackagesFeedback::orderBy('package_name')->get;
        $user = Auth::user();

        /*Price change*/
        if(!is_null($request->tmp)){
        if($request->tmp==1) $vacation = $vacation->sortBy('package_price');
        if($request->tmp==2) $vacation = $vacation->sortByDesc('package_price');}
        else $request->tmp=0;

        return view('vacation', array('vac_feedback'=>$feedback, 'tmp'=>$request->tmp));
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
        $vacation=VacationPackages::orderBy('package_name')->get;
        $vac_feedback=PackagesFeedback::orderBy('package_name')->get;
        $user = Auth::user();

        /*Price change*/
        if(!is_null($request->tmp)){
        if($request->tmp==1) $vacation = $vacation->sortBy('package_price');
        if($request->tmp==2) $vacation = $vacation->sortByDesc('package_price');}
        else $request->tmp=0;

        return view('vacation', array('vac_feedback'=>$feedback, 'tmp'=>$request->tmp));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
