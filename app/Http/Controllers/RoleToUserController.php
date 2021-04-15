<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateRoleToUserRequest;
use App\Http\Requests\UpdateRoleToUserRequest;
use App\Repositories\RoleToUserRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;
use Auth;

class RoleToUserController extends AppBaseController
{
    /** @var  RoleToUserRepository */
    private $roleToUserRepository;

    public function __construct(RoleToUserRepository $roleToUserRepo)
    {
        $this->roleToUserRepository = $roleToUserRepo;
    }

    /**
     * Display a listing of the RoleToUser.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $user = Auth::user();
        $is_admin = $user->RoleUser[0]->role->name == "Admin";
        $roleToUsers = $this->roleToUserRepository->all();

        return view('role_to_users.index', compact('is_admin'))
            ->with('roleToUsers', $roleToUsers);
    }

    /**
     * Show the form for creating a new RoleToUser.
     *
     * @return Response
     */
    public function create()
    {
        $user = Auth::user();
        $is_admin = $user->RoleUser[0]->role->name == "Admin";
        return view('role_to_users.create', compact('is_admin'));
    }

    /**
     * Store a newly created RoleToUser in storage.
     *
     * @param CreateRoleToUserRequest $request
     *
     * @return Response
     */
    public function store(CreateRoleToUserRequest $request)
    {
        $input = $request->all();

        $roleToUser = $this->roleToUserRepository->create($input);

        Flash::success('Role To User saved successfully.');

        return redirect(route('roleToUsers.index'));
    }

    /**
     * Display the specified RoleToUser.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $roleToUser = $this->roleToUserRepository->find($id);

        if (empty($roleToUser)) {
            Flash::error('Role To User not found');

            return redirect(route('roleToUsers.index'));
        }

        return view('role_to_users.show')->with('roleToUser', $roleToUser);
    }

    /**
     * Show the form for editing the specified RoleToUser.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $roleToUser = $this->roleToUserRepository->find($id);

        if (empty($roleToUser)) {
            Flash::error('Role To User not found');

            return redirect(route('roleToUsers.index'));
        }

        return view('role_to_users.edit')->with('roleToUser', $roleToUser);
    }

    /**
     * Update the specified RoleToUser in storage.
     *
     * @param int $id
     * @param UpdateRoleToUserRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateRoleToUserRequest $request)
    {
        $roleToUser = $this->roleToUserRepository->find($id);

        if (empty($roleToUser)) {
            Flash::error('Role To User not found');

            return redirect(route('roleToUsers.index'));
        }

        $roleToUser = $this->roleToUserRepository->update($request->all(), $id);

        Flash::success('Role To User updated successfully.');

        return redirect(route('roleToUsers.index'));
    }

    /**
     * Remove the specified RoleToUser from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $roleToUser = $this->roleToUserRepository->find($id);

        if (empty($roleToUser)) {
            Flash::error('Role To User not found');

            return redirect(route('roleToUsers.index'));
        }

        $this->roleToUserRepository->delete($id);

        Flash::success('Role To User deleted successfully.');

        return redirect(route('roleToUsers.index'));
    }
}
