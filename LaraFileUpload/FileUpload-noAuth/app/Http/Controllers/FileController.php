<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
// use Validator,Redirect,Response,File;
// use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\File;
use Illuminate\Support\Facades\Validator;



class FileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Get all Files
        $files = File::all();
        return view('index', compact('files'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        // file validation
        $validator = Validator::make( $request->all(), [
            'filename' => 'required|mimes:pdf|max:2048',
            // 'name'
        ] );

        // if validation fails
        if( $validator->fails() ) {
            return back()->withErrors( $validator->errors() );
        }

        // if validation success
        if( $file = $request->file('filename') ) {
            $name = time().time() . '.' . $file->getClientOriginalExtension();
            $cvName = $request->input('name');
            $cvemail = $request->input('email');
            $cvphone = $request->input('phone');
            $cvcity = $request->input('city');
            $cvCounty = $request->input('County');
            $cvaddress = $request->input('address');
            $cvcountry = $request->input('country');
            $cvPostCode = $request->input('PostCode');
            $cvdateAvailable = $request->input('dateAvailable');
            $cvdesiredPay = $request->input('desiredPay');
            $cvweblink = $request->input('weblink');
            $cvlinkedin = $request->input('linkedin');
            $cvjob_id = $request->input('job_id');

            dd('test');
            $target_path = public_path('/uploads/');
                if( $file->move($target_path, $name) ) {
                    // save filen name in db
                    $file = File::create( [
                        'filename' => $name,
                        'name'=> $cvName,
                        'email' => $cvemail,
                        'phone' => $cvphone,
                        'city' => $cvcity,
                        'County' => $cvCounty,
                        'address' => $cvaddress,
                        'country' => $cvcountry,
                        'PostCode' => $cvPostCode,
                        'dateAvailable' => $cvdateAvailable,
                        'desiredPay' => $cvdesiredPay,
                        'weblink' => $cvweblink,
                        'linkedin' => $cvlinkedin,
                        'job_id' => $cvjob_id
                    ] );
                    return back()->with("success", "File uploaded");
                }
        }
        
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
