<?php

namespace App\Http\Controllers;

use App\Item;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    
    public function index()
    {
        $data['stage_open'] = Item::where('stage','Open')->count();
        $data['stage_closed'] = Item::where('stage','Closed')->count();
        $data['stage_reopen'] = Item::where('stage','Re-Open')->count();
        $data['stage_responded'] = Item::where('stage','Responded')->count();
        $data['stage_verified'] = Item::where('stage','Verified')->count();
        $data['stage_voided'] = Item::where('stage','Voided')->count();

        $data['status_open'] = Item::where('status','Open')->count();
        $data['status_closed'] = Item::where('status','Closed')->count();
        $data['status_cancel'] = Item::where('status','Canceled')->count();

        $effective = \DB::select("SELECT sum(effectiveness = 'effective') as effective FROM items group by recipient_div");

        $data['result_effective'] = [];

        foreach($effective as $item){
            array_push($data['result_effective'], (int)($item->effective ? $item->effective : 0));
        }

        $noteffective = \DB::select("SELECT sum(effectiveness = 'not effective') as noteffective FROM items group by recipient_div");

        $data['result_noteffective'] = [];

        foreach($noteffective as $item){
            array_push($data['result_noteffective'], (int)($item->noteffective ? $item->noteffective : 0));
        }

        $data['stage'] = \DB::select("SELECT recipient_div, sum(stage = 'Closed') as closed, sum(stage = 'Open') as open, sum(stage = 'Re-Open') as reopen, sum(stage = 'Responded') as responded, sum(stage = 'Verified') as verified, sum(stage = 'Voided') as voided FROM items group by recipient_div");
// var_dump(json_encode($data['stage'])).die();
        return view('backend.pages.dashboard.index',$data);
    }

}
