<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateServersAPIRequest;
use App\Http\Requests\API\UpdateServersAPIRequest;
use App\Models\Servers;
use App\Repositories\ServersRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use App\Http\Resources\ServersResource;
use Response;

/**
 * Class ServersController
 * @package App\Http\Controllers\API
 */

class ServersAPIController extends AppBaseController
{
    /** @var  ServersRepository */
    private $serversRepository;

    public function __construct(ServersRepository $serversRepo)
    {
        $this->serversRepository = $serversRepo;
    }

    /**
     * Display a listing of the Servers.
     * GET|HEAD /servers
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $servers = $this->serversRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse(ServersResource::collection($servers), 'Servers retrieved successfully');
    }

    /**
     * Store a newly created Servers in storage.
     * POST /servers
     *
     * @param CreateServersAPIRequest $request
     *
     * @return Response
     */
    public function store(CreateServersAPIRequest $request)
    {
        $input = $request->all();

        $servers = $this->serversRepository->create($input);

        return $this->sendResponse(new ServersResource($servers), 'Servers saved successfully');
    }

    /**
     * Display the specified Servers.
     * GET|HEAD /servers/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var Servers $servers */
        $servers = $this->serversRepository->find($id);

        if (empty($servers)) {
            return $this->sendError('Servers not found');
        }

        return $this->sendResponse(new ServersResource($servers), 'Servers retrieved successfully');
    }

    /**
     * Update the specified Servers in storage.
     * PUT/PATCH /servers/{id}
     *
     * @param int $id
     * @param UpdateServersAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateServersAPIRequest $request)
    {
        $input = $request->all();

        /** @var Servers $servers */
        $servers = $this->serversRepository->find($id);

        if (empty($servers)) {
            return $this->sendError('Servers not found');
        }

        $servers = $this->serversRepository->update($input, $id);

        return $this->sendResponse(new ServersResource($servers), 'Servers updated successfully');
    }

    /**
     * Remove the specified Servers from storage.
     * DELETE /servers/{id}
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var Servers $servers */
        $servers = $this->serversRepository->find($id);

        if (empty($servers)) {
            return $this->sendError('Servers not found');
        }

        $servers->delete();

        return $this->sendSuccess('Servers deleted successfully');
    }
}
