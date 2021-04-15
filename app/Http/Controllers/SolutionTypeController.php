<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateSolutionTypeRequest;
use App\Http\Requests\UpdateSolutionTypeRequest;
use App\Repositories\SolutionTypeRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;
use Auth;

class SolutionTypeController extends AppBaseController
{
    /** @var  SolutionTypeRepository */
    private $solutionTypeRepository;

    public function __construct(SolutionTypeRepository $solutionTypeRepo)
    {
        $this->solutionTypeRepository = $solutionTypeRepo;
    }

    /**
     * Display a listing of the SolutionType.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        // $user = Auth::user();
        // $is_admin = $user->RoleUser[0]->role->name == "Admin";
        $solutionTypes = $this->solutionTypeRepository->all();

        return view('solution_types.index')
            ->with('solutionTypes', $solutionTypes);
    }

    /**
     * Show the form for creating a new SolutionType.
     *
     * @return Response
     */
    public function create()
    {
        // $user = Auth::user();
        // $is_admin = $user->RoleUser[0]->role->name == "Admin";
        return view('solution_types.create');
    }

    /**
     * Store a newly created SolutionType in storage.
     *
     * @param CreateSolutionTypeRequest $request
     *
     * @return Response
     */
    public function store(CreateSolutionTypeRequest $request)
    {
        $input = $request->all();

        $solutionType = $this->solutionTypeRepository->create($input);

        Flash::success('Solution Type saved successfully.');

        return redirect(route('solutionTypes.index'));
    }

    /**
     * Display the specified SolutionType.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        // $user = Auth::user();
        // $is_admin = $user->RoleUser[0]->role->name == "Admin";
        $solutionType = $this->solutionTypeRepository->find($id);

        if (empty($solutionType)) {
            Flash::error('Solution Type not found');

            return redirect(route('solutionTypes.index'));
        }

        return view('solution_types.show')->with('solutionType', $solutionType);
    }

    /**
     * Show the form for editing the specified SolutionType.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        // $user = Auth::user();
        // $is_admin = $user->RoleUser[0]->role->name == "Admin";
        $solutionType = $this->solutionTypeRepository->find($id);

        if (empty($solutionType)) {
            Flash::error('Solution Type not found');

            return redirect(route('solutionTypes.index'));
        }

        return view('solution_types.edit')->with('solutionType', $solutionType);
    }

    /**
     * Update the specified SolutionType in storage.
     *
     * @param int $id
     * @param UpdateSolutionTypeRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateSolutionTypeRequest $request)
    {
        $solutionType = $this->solutionTypeRepository->find($id);

        if (empty($solutionType)) {
            Flash::error('Solution Type not found');

            return redirect(route('solutionTypes.index'));
        }

        $solutionType = $this->solutionTypeRepository->update($request->all(), $id);

        Flash::success('Solution Type updated successfully.');

        return redirect(route('solutionTypes.index'));
    }

    /**
     * Remove the specified SolutionType from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $solutionType = $this->solutionTypeRepository->find($id);

        if (empty($solutionType)) {
            Flash::error('Solution Type not found');

            return redirect(route('solutionTypes.index'));
        }

        $this->solutionTypeRepository->delete($id);

        Flash::success('Solution Type deleted successfully.');

        return redirect(route('solutionTypes.index'));
    }
}
