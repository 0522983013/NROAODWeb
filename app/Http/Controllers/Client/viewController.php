<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \App\Models\npc_template;

class viewController extends Controller
{
    public function index(){
        return view('client.index');
    }
    public function tintuc(){
        return view('client.tintuc');
    }
    public function baiviet(){
        return view('client.baiviet');
    }

    public function test(Request $request, $id){
        $npc = npc_template::where('id', $id)->first();

        $Datashop = $npc->shop_template()->get();

        $shop = [
            'npc' => $npc->NAME,
            'shop' => []
        ];

        foreach( $Datashop as $key => $value ){
            $shop['shop'][] = [
                'name' => $value->tag_name,
                'tab_shop' => []
            ];
            $Datatab = $value->tab_shop()->get();

            foreach( $Datatab as $value ){
                $shop['shop'][$key]['tab_shop'][] = [
                    'tab_shop_name' => $value->NAME,
                    // 'tab_shop' => []
                ];
            }
        }
        dd($shop);
    }
}
