<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Register;
class RegisterController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
      $user = Register::all();
      return view('user_profile.home', compact('user'));
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
    $this->validate($request,[
      'name' => 'required',
      'phone' => 'required',
      'password' => 'required'
    ]);

    $user = new Register([
    'name'  => $request->input('name'),
      'phone' => $request->input('phone'),
      'password' => $request->input('password')
    ]);
    $user->save();
    return redirect('/login')->with('success', 'You are successfully registered');
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function show($id)
  {
      $user = Register::find($id);
      return view('user_profile.view', compact('user'));
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function edit($id)
  {
      $user = Register::find($id);
        // $val = $request->session()->get('ses');

      return view('user_profile.update',compact('user'));
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

      $this->validate($request,[
        'skill' => 'required',
        'email' => 'required',
        'address' => 'required',
        'fee' => 'required',
        'experience' => 'required'
      ]);

      $user = Register::find($id);
      //dd($user);
      $user->name = $request->input('name');
      $user->phone = $request->input('phone');
      $user->password = $request->input('password');
      $user->skill = $request->input('skill');
      $user->email = $request->input('email');
      $user->address = $request->input('address');
      $user->fee = $request->input('fee');
      $user->experience = $request->input('experience');
      // $user->image = $request->input('image');

      $image = $request->file('image');
      $profilePicture = 'profile-'.time().'-'.rand(000000,999999).'.'.$image->getClientOriginalExtension();
      $destinationPath = public_path('img');
      $image->move($destinationPath, $profilePicture);
  //  dd($profilePicture);
      $user->image=$profilePicture;
      $user->save();
      //dd($user);->save();
      //dd($user->id);
// $request->session()->put('success','Information Updated successfully');
//     session()->flush();
//     session()->forget('success');
     // $success='Information Updated successfully';
      return view('user_profile.dashboard',compact('user'));


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


  public function login(Request $request)
  {
    $phone  = $request->input('phone');
    $password = $request->input('password');
    $user = Register::wherephone($phone)->first();

    if (!empty($user->phone)) {
      if ($phone == $user->phone) {
        if ($password == $user->password) {
          $request->session()->put('ses', $user->id);
          $val = $request->session()->get('ses');

          // return redirect('/dashboard')->with('success','You are successfully logged in');
          return view('user_profile.dashboard',compact('user'));

        }else {
          return redirect('/login')->with('red-alert', 'Incorrect Password');
        }
      }
      }else {
        return redirect('/login')->with('red-alert', 'Incorrect Phone');
    }
  }
   public function logout()
  {
    session()->flush();
    session()->forget('ses');
    return redirect('/login')->with('success', 'You are successfully logged out');
  }
}
