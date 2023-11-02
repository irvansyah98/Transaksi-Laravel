<?php

namespace App\Http\Controllers;

use App\Item;
use App\Category;
use Illuminate\Http\Request;
use PDF;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['data'] = Item::orderBy('id', 'DESC')->get();
   
        return view('backend.pages.item.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = Item::orderBy('carp_code', 'DESC')->first();

        $code_payment = (int) substr($data->carp_code,-5);
        $code_payment++;
        $result['carp_code'] = sprintf("%05s", $code_payment);
        
        return view('backend.pages.item.create',$result);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $req = $request->all();

        $req['create_date'] = date('d-M-y',strtotime($req['create_date']));
        $req['due_date'] = date('d-M-y',strtotime($req['due_date']));
        $req['status_date'] = date('d-M-y',strtotime($req['status_date']));
  
        $result = Item::create($req);
  
        return redirect('backend/item')->withInput()->with('message', array(
            'title' => 'Yay!',
            'type' => 'success',
            'msg' => 'Saved Success.',
        ));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function show(Item $item)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
          if(count(Item::where('id',$id)->get()) > 0){
              $data['data'] = Item::find($id);
  
              return view('backend.pages.item.edit', $data);
          }else{
              return redirect('backend/item')->withInput()->with('message', array(
                'title' => 'Oops!',
                'type' => 'danger',
                'msg' => 'Data not found.',
              ));
          }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $req = $request->except('_method', '_token', 'submit');

        $req['create_date'] = date('d-M-y',strtotime($req['create_date']));
        $req['due_date'] = date('d-M-y',strtotime($req['due_date']));
        $req['status_date'] = date('d-M-y',strtotime($req['status_date']));
  
        $result = Item::where('id', $id)->update($req);
  
        return redirect('backend/item')->withInput()->with('message', array(
                'title' => 'Yay!',
                'type' => 'success',
                'msg' => 'Saved Success.',
        ));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $result = Item::find($id);
        $result->delete();
  
        return redirect()->back()->withInput()->with('message', array(
          'title' => 'Yay!',
          'type' => 'success',
          'msg' => 'Deleted data.',
        ));
    }

}
