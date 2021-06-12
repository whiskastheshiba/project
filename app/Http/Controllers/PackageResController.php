<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Persona;

class PackageResController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id = null)
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
        $validator = Validator::make($request->all(), [
                    
                    'name' => 'required|string|min:2|max:29',
                    'middle_name' => 'required|string|min:2|max:29',
                    'surname' => 'required|string|min:2|max:29',
                    'perskod' => 'required|string|min:12|max:12',
                    'phone' => 'required|integer',
                    'arrival' => 'required',
                    'departure' => 'required',
                ]);

        //persona
        $name = $request->name;
        $middlename = $request->middlename;
        $surname = $request->surname;
        $perskod = $request->perskod;
        $phone = $request->phone;
        $finduser = Persona::where('telephone', $request->phone)->first();
        if (!$finduser) {
            $persona = new Persona();
            $persona->first_name=$name;
            $persona->middle_name=NULL;
            $persona->last_name=$surname;
            $persona->telephone=$phone;
            $persona->save();
        }
        $lastperson = Persona::latest()->first()->id;
        
        

        return redirect('/allorders/'.Auth::user()->id);
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
