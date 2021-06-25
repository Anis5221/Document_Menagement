<?php

namespace App\Http\Controllers;

use App\Models\Complain;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Support\Str;
class ComplainController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $complains = Complain::all();
        return Inertia::render('Dashboard',[
            'complains' => $complains
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return Inertia::render('RequestComplain/Complain');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [

            'head_line' => 'required',
            'branch_name' => 'required',
            'branch_code' => 'required',
            'file' => 'required|mimes:csv,txt,xlx,xls,pdf,dox,doxs|max:2048'

        ]);

        if ( $request->hasFile('file')) {
            $file = $request->file;
            $fileName = time(). "_". $file->getClientOriginalName();
            // $storagePath = public_path('storage/files');
            $fileUrl = $file->storeAs('files', $fileName);

        }

        $cradentials = [
            'user_id' => auth()->id(),
            'request_id' => "PR-UDPS-".STR::random(6),
            'head_line' => $request->head_line,
            'details' => $request->details,
            'branch_name' => $request->branch_name,
            'branch_code' => $request->branch_code,
            'occur_time' => $request->occur_time,
            'file' => $fileUrl,
            'request_type' => $request->request_type,
            'priority' => $request->priority,
            'problem_url' => $request->problem_url,
            'contact_persone' => $request->contact_persone,
            'phone' => $request->phone,
            'status' => "panding",
        ];

        Complain::create($cradentials);
        return back()->with([
            'message' => "Successfully Compalined!"
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $complain = Complain::find($id);
        return Inertia::render('ComplainView/Single', ['complain' => $complain]);
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
