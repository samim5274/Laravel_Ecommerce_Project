<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $username = $request->has('uname')? $request->get('uname'):'';
        $password = $request->has('pass')? $request->get('pass'):'';
        $uinfo = Employee::where('username','=',$username)->where('password','=',$password)->first();
        if(isset($uinfo) && $password != NULL){
            return redirect('/profile_employee');
        }
        else{
            return redirect()->back()->with('error','User login faild.');
        }
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
        $employe = new Employee();
        $employe->fname=$request->has('txtFirstname')? $request->get('txtFirstname'):'';
        $employe->lname=$request->has('txtLastname')? $request->get('txtLastname'):'';
        $employe->phone=$request->has('txtPhone')? $request->get('txtPhone'):'';
        $employe->dob=$request->has('dtpDate')? $request->get('dtpDate'):'';
        $employe->username=$request->has('txtUsername')? $request->get('txtUsername'):'';
        $employe->password=$request->has('txtPassword')? $request->get('txtPassword'):'';

        if($request->has('images'))
        {
            $files = $request->file('images');
            $imageLocation = array();
            $i=0;
            foreach($files as $file)
            {
                $extention = $file->getClientoriginalExtension();
                $fileName = 'employee-'. time() . ++$i . '.' . $extention;
                $location = '/images/employee/';
                $file->move(public_path() . $location, $fileName);
                $imageLocation[] = $location . $fileName;
            }
            $employe->image=implode('|', $imageLocation);
            $employe->save();
            return back()->with('success','new user created successfully.');
        }
        else
        {
            return back()->with('error','new user created not possible. Please try again. Thank you!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function show(Employee $employee)
    {
        // dd($employee);
        $images = explode('|',$employee->image);
        return view('userDetail', compact('employee','images'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function edit(Employee $employee)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Employee $employee)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function destroy(Employee $employee)
    {
        //
    }

    public function EmployeeInfo(){
        return view('EmployeeInfo');
    }

    public function profileEmployee()
    {
        $users = Employee::all();
        $allUsers = array();
        
        foreach($users as $user)
        {
            $images = explode('|', $user->image);
            $allUsers[] = [
                'fname'=>$user->fname,
                'lname'=>$user->lname,
                'dob'=>$user->dob,
                'phone'=>$user->phone,
                'username'=>$user->username,
                'password'=>$user->password,
                'image'=>$images[0]
            ];
        }
        return view('profile', compact('allUsers'));
    }

    public function alluserShow(){
        $usersAll = Employee::paginate(6);
        // dd($usersAll);
        return view('userAll',compact('usersAll'));
    }
}
