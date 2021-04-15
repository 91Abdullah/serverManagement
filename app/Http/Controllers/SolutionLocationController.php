<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateSolutionLocationRequest;
use App\Http\Requests\UpdateSolutionLocationRequest;
use App\Repositories\SolutionLocationRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;
use Auth;

class SolutionLocationController extends AppBaseController
{
    /** @var  SolutionLocationRepository */
    private $solutionLocationRepository;

    public function __construct(SolutionLocationRepository $solutionLocationRepo)
    {
        $this->solutionLocationRepository = $solutionLocationRepo;
        $this->middleware('permission:solution-location-list|solution-location-create|solution-location-edit|solution-location-delete', ['only' => ['index','show']]);
        $this->middleware('permission:solution-location-create', ['only' => ['create','store']]);
        $this->middleware('permission:solution-location-edit', ['only' => ['edit','update']]);
        $this->middleware('permission:solution-location-delete', ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the SolutionLocation.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        // $user = Auth::user();
        // $is_admin = $user->RoleUser[0]->role->name == "Admin";
        $solutionLocations = $this->solutionLocationRepository->all();

        return view('solution_locations.index')
            ->with('solutionLocations', $solutionLocations);
    }

    /**
     * Show the form for creating a new SolutionLocation.
     *
     * @return Response
     */
    public function create()
    {
        // $user = Auth::user();
        // $is_admin = $user->RoleUser[0]->role->name == "Admin";
        return view('solution_locations.create');
    }

    /**
     * Store a newly created SolutionLocation in storage.
     *
     * @param CreateSolutionLocationRequest $request
     *
     * @return Response
     */
    public function store(CreateSolutionLocationRequest $request)
    {
        $input = $request->all();

        $solutionLocation = $this->solutionLocationRepository->create($input);

        Flash::success('Solution Location saved successfully.');

        return redirect(route('solutionLocations.index'));
    }

    /**
     * Display the specified SolutionLocation.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        // $user = Auth::user();
        // $is_admin = $user->RoleUser[0]->role->name == "Admin";
        $solutionLocation = $this->solutionLocationRepository->find($id);

        if (empty($solutionLocation)) {
            Flash::error('Solution Location not found');

            return redirect(route('solutionLocations.index'));
        }

        return view('solution_locations.show')->with('solutionLocation', $solutionLocation);
    }

    /**
     * Show the form for editing the specified SolutionLocation.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        // $user = Auth::user();
        // $is_admin = $user->RoleUser[0]->role->name == "Admin";
        $solutionLocation = $this->solutionLocationRepository->find($id);

        if (empty($solutionLocation)) {
            Flash::error('Solution Location not found');

            return redirect(route('solutionLocations.index'));
        }

        return view('solution_locations.edit')->with('solutionLocation', $solutionLocation);
    }

    /**
     * Update the specified SolutionLocation in storage.
     *
     * @param int $id
     * @param UpdateSolutionLocationRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateSolutionLocationRequest $request)
    {
        $solutionLocation = $this->solutionLocationRepository->find($id);

        if (empty($solutionLocation)) {
            Flash::error('Solution Location not found');

            return redirect(route('solutionLocations.index'));
        }

        $solutionLocation = $this->solutionLocationRepository->update($request->all(), $id);

        Flash::success('Solution Location updated successfully.');

        return redirect(route('solutionLocations.index'));
    }

    /**
     * Remove the specified SolutionLocation from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $solutionLocation = $this->solutionLocationRepository->find($id);

        if (empty($solutionLocation)) {
            Flash::error('Solution Location not found');

            return redirect(route('solutionLocations.index'));
        }

        $this->solutionLocationRepository->delete($id);

        Flash::success('Solution Location deleted successfully.');

        return redirect(route('solutionLocations.index'));
    }
}
