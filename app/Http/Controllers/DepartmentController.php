<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateDepartmentRequest;
use App\Http\Requests\UpdateDepartmentRequest;
use App\Repositories\DepartmentRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;
use Auth;

class DepartmentController extends AppBaseController
{
    /** @var  DepartmentRepository */
    private $departmentRepository;

    public function __construct(DepartmentRepository $departmentRepo)
    {
        $this->departmentRepository = $departmentRepo;
        $this->middleware('permission:department-list|department-create|department-edit|department-delete', ['only' => ['index','show']]);
        $this->middleware('permission:department-create', ['only' => ['create','store']]);
        $this->middleware('permission:department-edit', ['only' => ['edit','update']]);
        $this->middleware('permission:department-delete', ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the Department.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        // $user = Auth::user();
        // $is_admin = $user->RoleUser[0]->role->name == "Admin";
        $departments = $this->departmentRepository->all();

        return view('departments.index')
            ->with('departments', $departments);
    }

    /**
     * Show the form for creating a new Department.
     *
     * @return Response
     */
    public function create()
    {
        // $user = Auth::user();
        // $is_admin = $user->RoleUser[0]->role->name == "Admin";
        return view('departments.create');
    }

    /**
     * Store a newly created Department in storage.
     *
     * @param CreateDepartmentRequest $request
     *
     * @return Response
     */
    public function store(CreateDepartmentRequest $request)
    {
        $input = $request->all();

        $department = $this->departmentRepository->create($input);

        Flash::success('Department saved successfully.');

        return redirect(route('departments.index'));
    }

    /**
     * Display the specified Department.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        // $user = Auth::user();
        // $is_admin = $user->RoleUser[0]->role->name == "Admin";
        $department = $this->departmentRepository->find($id);

        if (empty($department)) {
            Flash::error('Department not found');

            return redirect(route('departments.index'));
        }

        return view('departments.show')->with('department', $department);
    }

    /**
     * Show the form for editing the specified Department.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        // $user = Auth::user();
        // $is_admin = $user->RoleUser[0]->role->name == "Admin";
        $department = $this->departmentRepository->find($id);

        if (empty($department)) {
            Flash::error('Department not found');

            return redirect(route('departments.index'));
        }

        return view('departments.edit')->with('department', $department);
    }

    /**
     * Update the specified Department in storage.
     *
     * @param int $id
     * @param UpdateDepartmentRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateDepartmentRequest $request)
    {
        $department = $this->departmentRepository->find($id);

        if (empty($department)) {
            Flash::error('Department not found');

            return redirect(route('departments.index'));
        }

        $department = $this->departmentRepository->update($request->all(), $id);

        Flash::success('Department updated successfully.');

        return redirect(route('departments.index'));
    }

    /**
     * Remove the specified Department from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $department = $this->departmentRepository->find($id);

        if (empty($department)) {
            Flash::error('Department not found');

            return redirect(route('departments.index'));
        }

        $this->departmentRepository->delete($id);

        Flash::success('Department deleted successfully.');

        return redirect(route('departments.index'));
    }
}
