<?php

namespace App\Http\Controllers;
use App\Models\kar;
use Illuminate\Http\Request;

class karctrl extends Controller
{
    public function karret(){
        return view("createKar");
    }
    public function storeData(Request $request){
        kar::create([
            'Name' => $request->Name,
            'Age' => $request->Age,
            'Address' => $request->Address,
            'TLP' => $request->TLP,
        ]);
        return redirect('/user');
    }

    public function show(){
        $kar = kar::all();
        return view('user', compact('kar'));
    }
    public function edit($id){
        $kars = kar::findOrFail($id);
        return view('editData', compact('kars'));
    }
    public function update(Request $request, $id){
        kar::findOrFail($id)->update([
            'Name' => $request->Name,
            'Age' => $request->Age,
            'Address' => $request->Address,
            'TLP' => $request->TLP,
        ]);
        return redirect('/user');
    }
    public function delete($id){
        kar::destroy($id);
            return redirect('user');
    }
    


}
