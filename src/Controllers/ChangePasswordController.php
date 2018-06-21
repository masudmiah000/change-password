<?php

namespace Mao\ChangePassword\Controllers;

use App\Http\Controllers\Controller;
use App\User;
use DB;
use Log;
use Illuminate\Http\Request;
class ChangePasswordController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
    	return view('ChangePassword::changePassword.index');
    }
    public function change_password(Request $request){
    	$this->validate($request,[
    		'password_current' => 'required|string',
    		'password' => 'required|string|confirmed',
    		'password_confirmation' => 'required|string|same:password',
    	]);
    	try {
    		$user = User::findOrFail(auth()->user()->id);
    		if (!\Hash::check($request->old_password,$user->password)) {
    			return redirect()->back()->withErrors('Old password did not matched.');
    		}
    		DB::beginTransaction();
    		$user->password = \Hash::make($request->password);
    		$user->save();
    		DB::commit();
    		return redirect()->back()->with('success','Password changed successfully.');
    	} catch (\Exception $e) {
    		DB::rollback();
    		Log::error($e->getMessage());
    		return redirect()->back()->withErrors('Password change failed.');
    	}
    }
}