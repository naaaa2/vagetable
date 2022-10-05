<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\VegeRegister;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use App\Services\VegeRegisterData;
use App\Http\Requests\StoreVegeRegister;
use Illuminate\Database\Eloquent\Casts\Attribute;
//use RakutenRws_Client;

class VegeRegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index(Request $request)
    {
        //$veges = VegeRegister::find($request->user_id);
        $veges = $request->user()->veges;
        
        // $veges = VegeRegister::select('vege_id','vege_name','method','date_purchase','quantity')
        // ->paginate(20);

        return view('vege_register.index')->with(compact('veges'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('vege_register.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreVegeRegister $request)
    {   
        //dd($request, $request->vege_name);
        VegeRegister::create([
            'vege_name' => $request->vege_name,
            'date_purchase' => $request->date_purchase,
            'method' => $request->method,
            'quantity' => $request->quantity,
            'user_id' => \Auth::id(),
        ]);

        return to_route('vege_register.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $vege
     * @return \Illuminate\Http\Response
     */
    public function show($vege_id)
    {
        $veges = VegeRegister::find($vege_id);
        $method = VegeRegisterData::checkMethod($veges);
        $vege_name = VegeRegisterData::VegeName($veges);
        $bestby = VegeRegisterData::limit($veges);

        return view('vege_register.show',compact('veges', 'method', 'vege_name', 'bestby'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($vege_id)
    {
        //
        $veges = VegeRegister::find($vege_id);

        return view('vege_register.edit', compact('veges'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $vege_id)
    {
        //
        $veges = VegeRegister::find($vege_id);

        $veges->vege_name = $request->input('vege_name');
        $veges->date_purchase = $request->input('date_purchase');
        $veges->method = $request->input('method');
        $veges->quantity = $request->input('quantity');

        $veges->save();

        return to_route('vege_register.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($vege_id)
    {
        $veges = VegeRegister::find($vege_id);
        $veges->delete();

        return to_route('vege_register.index');

    }

    // public function get_rakuten_items()
    // {
    //     $client = new RakutenRws_Client();

    //     define("RAKUTEN_APPLICATION_ID", config('app.rakuten_id'));

    //     $client->setApplicationId(RAKUTEN_APPLICATION_ID);

    //     $response = $client->execute('IchibaItemSearch',array(
    //         'keyword' => '任意のキーワードを入れてください'
    //     ));

    //     if(!$response->isOk()){
    //         return 'Error:'.$response->getMessage();
    //     } else {
    //         $items = [];
    //         foreach($response as $key => $rakutenItem){
    //             $items[$key]['title'] = $rakutenItem['itemName'];
    //             $items[$key]['price'] = $rakutenItem['itemPrice'];
    //             $items[$key]['url'] = $rakutenItem['itemUrl'];

    //             if($rakutenItem['imageFlag']){
    //                 $imgSrc = $rakutenItem['mediumImageUrls'][0]['imageUrl'];
    //                 $items[$key]['img'] = preg_replace('/^http:/','https:',$imgSrc);
    //             }
    //         }
    //         return $items;
    //     }
    // }
    
}
