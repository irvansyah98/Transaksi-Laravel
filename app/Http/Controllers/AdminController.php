<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Storage;
use Image;
use File;

class AdminController extends Controller
{

	public function index() {
		$data['data'] = User::where('role','admin')->get();
		return view('backend.pages.admin.index',$data);
	}

	public function create() {
		return view('backend.pages.admin.create');
	}

	public function store(Request $request)
	{
		$req = $request->all();
		
		if ($request->hasFile('photo')) {
            if ($request->file('photo')->isValid()) {
                $destinationPath = 'profil/'; // upload path
                $extension = $request->file('photo')->getClientOriginalExtension(); // getting photo extension
                $fileName = rand(11111,99999).'.'.$extension; // renaming photo
                $request->file('photo')->move($destinationPath, $fileName); // uploading file to given path
                Image::make($destinationPath.$fileName)->resize(500, null, function($constraint) {
                      $constraint->aspectRatio();
                      $constraint->upsize();
                  })->save($destinationPath.$fileName);
                $req['photo'] = $fileName;
                // unset($req['image']);
            }
        }

		$req['password'] = \Hash::make($req['password']);
		$req['role'] = 'admin';

		$result = User::create($req);

		return redirect('backend/admin')->withInput()->with('message', array(
			'title' => 'Yay!',
			'type' => 'success',
			'msg' => 'Saved Success.',
		));
	}

	public function edit($id)
    {
      $data['data'] = User::find($id);

      return view('backend.pages.admin.edit', $data);
    }

    public function update($id, Request $request)
    {
      	$req = $request->except('_method', '_token', 'submit');

		if (!empty($req['password'])) {
			$req['password'] = \Hash::make($req['password']);
		  }else {
			unset($req['password']);
		}

		if ($request->hasFile('photo')) {
			if ($request->file('photo')->isValid()) {
			  $destinationPath = 'profil/'; // upload path
			  $extension = $request->file('photo')->getClientOriginalExtension(); // getting photo extension
			  $fileName = rand(11111,99999).'.'.$extension; // renaming photo
			  $request->file('photo')->move($destinationPath, $fileName); // uploading file to given path
			  Image::make($destinationPath.$fileName)->resize(500, null, function($constraint) {
				$constraint->aspectRatio();
				$constraint->upsize();
			  })->save($destinationPath.$fileName);
			  $req['photo'] = $fileName;
			//   unset($req['image']);
			}else {
			  unset($req['photo']);
			}
		  }else {
			unset($req['photo']);
		}

        $result = User::where('id', $id)->update($req);

        return redirect('backend/admin')->withInput()->with('message', array(
          'title' => 'Yay!',
          'type' => 'success',
          'msg' => 'Saved Success.',
        ));
    }

    public function destroy($id)
    {
      $result = User::find($id);
      $result->delete();

      return redirect()->back()->withInput()->with('message', array(
        'title' => 'Yay!',
        'type' => 'success',
        'msg' => 'Deleted data.',
      ));
    }
}
