<?php

namespace Modules\Infrastructure\app\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Infrastructure\app\Repositories\InfrastructureRepository;

class InfrastructureController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index(
        InfrastructureRepository $infrastructureRepository
    ) {
        $infrastructures = $infrastructureRepository->getAll();

        return auth()->user()->hasRole('User')
            ? view('infrastructure::user.index', compact('infrastructures'))
            : (auth()->user()->hasRole('Super Admin')
                ? view('infrastructure::admin.index', compact('infrastructures'))
                : abort()
            );
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('infrastructure::admin.create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        return view('infrastructure::admin.show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        return view('infrastructure::admin.edit');
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        //
    }
}
