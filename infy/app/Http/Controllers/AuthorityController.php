<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateAuthorityRequest;
use App\Http\Requests\UpdateAuthorityRequest;
use App\Repositories\AuthorityRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class AuthorityController extends AppBaseController
{
    /** @var  AuthorityRepository */
    private $authorityRepository;

    public function __construct(AuthorityRepository $authorityRepo)
    {
        $this->authorityRepository = $authorityRepo;
    }

    /**
     * Display a listing of the Authority.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->authorityRepository->pushCriteria(new RequestCriteria($request));
        $authorities = $this->authorityRepository->paginate(25);

        return view('authorities.index')
            ->with('authorities', $authorities);
    }

    /**
     * Show the form for creating a new Authority.
     *
     * @return Response
     */
    public function create()
    {
        return view('authorities.create');
    }

    /**
     * Store a newly created Authority in storage.
     *
     * @param CreateAuthorityRequest $request
     *
     * @return Response
     */
    public function store(CreateAuthorityRequest $request)
    {
        $input = $request->all();

        $authority = $this->authorityRepository->create($input);

        Flash::success('Authority saved successfully.');

        return redirect(route('authorities.index'));
    }

    /**
     * Display the specified Authority.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $authority = $this->authorityRepository->findWithoutFail($id);

        if (empty($authority)) {
            Flash::error('Authority not found');

            return redirect(route('authorities.index'));
        }

        return view('authorities.show')->with('authority', $authority);
    }

    /**
     * Show the form for editing the specified Authority.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $authority = $this->authorityRepository->findWithoutFail($id);

        if (empty($authority)) {
            Flash::error('Authority not found');

            return redirect(route('authorities.index'));
        }

        return view('authorities.edit')->with('authority', $authority);
    }

    /**
     * Update the specified Authority in storage.
     *
     * @param  int              $id
     * @param UpdateAuthorityRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateAuthorityRequest $request)
    {
        $authority = $this->authorityRepository->findWithoutFail($id);

        if (empty($authority)) {
            Flash::error('Authority not found');

            return redirect(route('authorities.index'));
        }

        $authority = $this->authorityRepository->update($request->all(), $id);

        Flash::success('Authority updated successfully.');

        return redirect(route('authorities.index'));
    }

    /**
     * Remove the specified Authority from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $authority = $this->authorityRepository->findWithoutFail($id);

        if (empty($authority)) {
            Flash::error('Authority not found');

            return redirect(route('authorities.index'));
        }

        $this->authorityRepository->delete($id);

        Flash::success('Authority deleted successfully.');

        return redirect(route('authorities.index'));
    }
}
