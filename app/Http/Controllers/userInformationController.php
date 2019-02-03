<?php

namespace App\Http\Controllers;

use App\Models\UserInformation;
use Illuminate\Http\Request;

class userInformationController extends Controller
{
    public function Insert(Request $request){
        try{
            UserInformation::create([
                        'id_UserInf'=>$request->id_UserInf,
                        'nick'=>$request->nick,
                        'age'=>$request->age,
                        'dni'=>$request->dni,
                        'height'=>$request->height]);
            return redirect('/home');

        }catch (\Exception $e){
            dd($e->getMessage());
        }

    }
    public function showInsert(){
        return view('/home');
    }
    public function Update(Request $request){
        try{
            UserInformation::where('id',$request->id)->update(['nick'=>$request->nick]);


            return redirect('/home');
        }catch(\Exception $e){
            dd($e->getMessage());
        }
    }
    public function showUpdate(){
        return view('/home');
    }

    public function Delete(Request $request){
        try{
            UserInformation::where('id',$request->id)->delete();

            return redirect('/home');
        }catch (\Exception $e){
            dd($e->getMessage());
        }
    }
    public function showDelete(){
        return view('/home');
    }

    public function showList(){
        try{
            $dataUser = UserInformation::all();
            return view('/home')->with(array('allUser'=>$dataUser));

        }catch (\Exception $e){
            dd($e->getMessage());
        }
    }
}
