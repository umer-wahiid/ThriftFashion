<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('website.login');
    }

    public function createregister(){
        return view ('website.register');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'username'=>'required|unique:users',
            'email'=>'required|unique:users',
            'address'=>'required',
            'contact'=>'required|unique:users',
            'password'=>'required',
        ]);


        $name = $request->file('image')->getClientOriginalName();
        $path = $request->file('image')->move('admin/assets/users_images');


        $create  = new User();
        $create->role_id = '2';
        $create->name = $request->name;
        $create->username = $request->username;
        $create->email = $request->email;
        $create->contact = $request->contact;
        $create->address = $request->address;
        $create->country = $request->country;
        $create->city = $request->city;
        $create->image = $path;
        $create->password = Hash::make($request->password);
        $create->save();

        return redirect('auth/login');
    }



    public function storelogin(Request $request){


        $request->validate([
            'email'=>'required',
            'password'=>'required',
        ]);


        $data = [
            'email' => $request->email,
            'password' => $request->password,
        ];


        if(Auth::attempt($data)){
            if(auth::user()->role_id=='1'){
                return redirect('dashboard');
            }
            else{
                return redirect('/');
            }
        }
        else{
            return redirect('auth/login');
        }
    }




    public function logout(){
        Auth::logout();
        return redirect('/');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $show =DB::table('roles')
        ->join('users','users.role_id','=','roles.id')
        ->get();
        return view ('admin.users',['show'=>$show]);
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
