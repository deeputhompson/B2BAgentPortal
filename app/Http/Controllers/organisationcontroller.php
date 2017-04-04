<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Organisations;
use App\Party;
use Illuminate\Pagination\LengthAwarePaginator;
use Session;


class organisationcontroller extends Controller
{
      
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $querystring = Session::get('q');
        $organisation = Organisations::where('id','LIKE','%'.$querystring.'%')->paginate(3);
        return view('organisation.index',['organisations'=>$organisation]);
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

         //$rand = rand(0,9) . rand(0,9) . rand(0,9) . rand(0,9) . rand(0,9) . rand(0,9) . rand(0,9) . rand(0,9) . rand(0,9) ;

        $rand = abs(crc32(uniqid()));
        
        switch($request->submit_button)
        {

            case 'save_company':
            
            $party = new Party;
            $party->partyId = $rand;
            $party->partyType = "Organisation";
            $party->save();

            $organisation = new Organisations;
            $organisation->id = $request->company_id;
            $organisation->organisationPartyId = $rand;
            $organisation->organisationName = $request->company_name;  
            $organisation->save();  
            $organisation = Organisations::where('id','LIKE','%'.$request->company_id.'%')->paginate(3); 
            return view('organisation.index',['organisations'=>$organisation]);
        break;

            case 'search_company':
                $querystring = $request->company_id;
                $organisation = Organisations::where('id','LIKE','%'.$request->company_id.'%')->paginate(3); 
                session(['q'=>$querystring]);
                return view('organisation.index',['organisations'=>$organisation]);
            break;
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
