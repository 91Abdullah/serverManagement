<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Repositories\UserRepository;
use App\Models\Department;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;
use Auth;
use Complex\Complex;
use App\Models\User;
use App\Models\UserHasDepartment;
use Spatie\Permission\Models\Role;
use DB;
use Hash;
use Illuminate\Support\Arr;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public $department =[];

    function __construct()
    {

        $this->department = [
            Department::all()
        ];
    }
    public function index(Request $request)
    {
        $department = $this->department;

        $data = User::orderBy('id','DESC')->paginate(5);
        return view('users.index',compact('data'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $department = $this->department;
        
        $roles = Role::pluck('name','name')->all();
        return view('users.create',compact('roles', 'department'));
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|same:confirm-password',
            'roles' => 'required'
        ]);
    
        $input = $request->all();
        $input['password'] = Hash::make($input['password']);
    
        $user = User::create($input);
        

        $department = $request->input('department');
        $arr=$department;

        $user->departments()->sync($arr);


        //  foreach ($department as $dept) {
        //      # code...
        //      $data = ['department_id' => $dept, 'user_id' => $user->id];
        //     //  dd($data);
        //      UserHasDepartment::insert($data);
        //  }


        // $user->department($request->input('department'));
        $user->assignRole($request->input('roles'));
    
        return redirect()->route('users.index')
                        ->with('success','User created successfully');
    }
    
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $userDepartments = Department::join('user_has_departments', 'user_has_departments.department_id', "=", "department.id")->where('user_has_departments.user_id', $id)->get();
        
        $user = User::find($id);
        return view('users.show',compact('user', 'userDepartments'));
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $department = $this->department;
        $user = User::find($id);

        $userDepartments = DB::table('user_has_departments')->where('user_has_departments.user_id', $id)->pluck('user_has_departments.department_id', 'user_has_departments.department_id')->all();


        $roles = Role::pluck('name','name')->all();
        $userRole = $user->roles->pluck('name','name')->all();
    
        return view('users.edit',compact('user','roles','userRole', 'department', 'userDepartments'));
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
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:users,email,'.$id,
            'password' => 'same:confirm-password',
            'roles' => 'required'
        ]);
    
        $input = $request->all();
        if(!empty($input['password'])){ 
            $input['password'] = Hash::make($input['password']);
        }else{
            $input = Arr::except($input,array('password'));    
        }
    
        $department = $request->input('department');
        $arr=$department;

        

        $user = User::find($id);
        

        // $data = [];
        //  foreach ($department as $dept) {
        //      # code...
        //      $data = ['department_id' => $dept, 'user_id' => $user->id];
        //     //  dd($data);
        //      UserHasDepartment::insert($data);
        //  }
        //  dd($data);

        $user->update($input);

        $user->departments()->sync($arr);
        DB::table('model_has_roles')->where('model_id',$id)->delete();
    
        $user->assignRole($request->input('roles'));
    
        return redirect()->route('users.index')
                        ->with('success','User updated successfully');
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::find($id)->delete();
        return redirect()->route('users.index')
                        ->with('success','User deleted successfully');
    }
}