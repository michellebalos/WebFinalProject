<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class ActivityController extends Controller
{



    public function login(Request $req)
    {


        $user = DB::select('select * from tbl_users');
        $bool = false;

        foreach ($user as $user) {
            # code...
             if($user->username == $req->input('username') &&  Hash::check($req->input('password'),$user->password)){
                $bool = true;
                session()->put('user_id',$user->user_id);
            }
        }   

        if($bool){
       
             return redirect('/home')->with('login','');
            
        }
        else{
            return back()->with('login_not','');
        }        
    }
    public function logout(Request $req) {
        $bool = false;
        if($bool){
        return redirect('/login_signup');}

    }






    public function signup(Request $req)
    {
        # code...
        $b = true;
        $me = DB::select('select * from tbl_users where user_id= ? ',[session()->get('user_id')]);

        foreach ($me as $con) {
            # code... 
            if($req->input('username') ==  $con->username){
                return redirect('/')->with('nosignup','');
                $b = false;
            }
        }   

       if($b){
            $data = array(
            'username' =>$req->input('username'), 
            'name' =>$req->input('name'), 
            'email' =>$req->input('email'), 
            'raw_password' =>$req->input('password'), 
            'password' =>Hash::make($req->input('password')), 
            );
            DB::table('tbl_users')->insert($data);
            return redirect('/')->with('signup','');
       }
    }



    public function insert(Request $req)
    {
    	# code...
    	$data = array(
    	'user_id' =>$req->input('user_id'), 
	    'contact_name' =>$req->input('name'), 
		'contact_type' =>$req->input('type'),
        'contact_email' =>$req->input('email'),
		);
		DB::table('tbl_contact_details')->insert($data);

     

        $cons = DB::select('select * from tbl_contact_details where user_id= ? ORDER BY contact_id ASC',[$req->input('user_id')]);


        $final_con_id = "";

        foreach ($cons as $con) {
            # code...
            $final_con_id = $con->contact_id;
        }   

        $con_det = DB::select('select * from tbl_contact_details where contact_id = ?',[$final_con_id]);


		return view('additional_info',compact('con_det'))->with('created','');
    }


    public function additional(Request $req)
    {
        # code...
        $data1 = array(
        'contact_id' =>$req->input('contact_id'), 
        'address_barangay' =>$req->input('address_barangay'), 
        'address_street' =>$req->input('address_street'),
        'address_city' =>$req->input('city'),
        'address_state' =>$req->input('state'),
        'address_zipcode' =>$req->input('zip_code'),

        );
        DB::table('tbl_address')->insert($data1);

     

         $data2 = array(
        'contact_id' =>$req->input('contact_id'), 
        'phone_home' =>$req->input('phone_home'), 
        'phone_work' =>$req->input('phone_work'),
        'phone_cell' =>$req->input('phone_cell'),
        );
        DB::table('tbl_phone')->insert($data2);

     

        return redirect('/home')->with('createdfinal','');
    }








    public function home()
    {
        # code...
        $contacts = DB::select('select * from tbl_contact_details where user_id= ? ',[session()->get('user_id')]);

        $address = DB::select('select * from tbl_address');
        $phone = DB::select('select * from tbl_phone ');

        return view('contacts',compact('contacts','address','phone'));
    }





    public function me_display()
    {
        # code...
        $me = DB::select('select * from tbl_users where user_id= ? ',[session()->get('user_id')]);

        return view('personal',compact('me'));
    }










     public function update(Request $req)
    {
        # code...
        DB::update('update tbl_contact_details set 
            contact_name = ?, 
            contact_type = ?,
            contact_email = ?
    
            where contact_id = ? ',[
                $req->input('name'),
                $req->input('type'),
                $req->input('email'),
                $req->input('contact_id')
            ]);



        DB::update('update tbl_address set 
            address_barangay = ?, 
            address_street = ?,
            address_city = ?,
            address_state=?,
            address_zipcode=?
    
            where contact_id = ? ',[
                $req->input('address_barangay'),
                $req->input('address_street'),
                $req->input('city'),
                $req->input('state'),
                $req->input('zip_code'),
                $req->input('contact_id')
            
            ]);



        DB::update('update tbl_phone set 
            phone_home = ?, 
            phone_work = ?,
            phone_cell = ?
    
            where contact_id = ? ',[
                $req->input('phone_home'),
                $req->input('phone_work'),
                $req->input('phone_cell'),
                $req->input('contact_id')
            ]);


  

        return redirect('/home')->with('updated','');
    }




    public function del_this_fun(Request $req)
    {
        # code...
        DB::delete('delete from tbl_contact_details where contact_id = "'.$req->input('contact_id').'"');
        DB::delete('delete from tbl_address where contact_id = "'.$req->input('contact_id').'"');
        DB::delete('delete from tbl_phone where contact_id = "'.$req->input('contact_id').'"');


        return redirect('/home')->with('del','');
    }


    public function update_me(Request $req)
    {
        # code...
        DB::update('update tbl_users set 
            name = ?, 
            username = ?,
            email = ?,
            raw_password = ?,
            password = ?
            where user_id = ? ',[
                $req->input('name'),
                $req->input('username'),
                $req->input('email'),
                $req->input('raw_password'),
                Hash::make($req->input('raw_password')),
                session()->get('user_id')
            ]);
        return back()->with('meupdated','');

    }





}

