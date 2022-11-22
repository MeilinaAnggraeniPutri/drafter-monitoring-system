<?php

namespace Modules\Infrastructure\app\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Infrastructure\app\Http\Requests\StoreInfrastructureRequest;
use Modules\Infrastructure\app\Http\Requests\UpdateInfrastructureRequest;
use Modules\Infrastructure\app\Models\Infrastructure;
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
    public function store(
        StoreInfrastructureRequest $request,
        InfrastructureRepository $infrastructureRepository
    ) {
        return $infrastructureRepository->store($request)
            ? to_route('infrastructure.index')->with('success', 'Infrastructure has been created successfully!')
            : to_route('infrastructure.index')->with('failed', 'Infrastructure was not created successfully!');
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show(string $infrastructure)
    {
        $infrastructure = Infrastructure::where('slug', $infrastructure)->firstOrFail();

        return view('infrastructure::show', compact('infrastructure'));
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit(Infrastructure $infrastructure)
    {
        return view('infrastructure::admin.edit', compact('infrastructure'));
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(
        UpdateInfrastructureRequest $request,
        InfrastructureRepository $infrastructureRepository,
        Infrastructure $infrastructure
    ) {
        return $infrastructureRepository->update($request, $infrastructure)
            ? to_route('infrastructure.index')->with('success', 'Infrastructure has been updated successfully!')
            : to_route('infrastructure.index')->with('failed', 'Infrastructure was not updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy(
        InfrastructureRepository $infrastructureRepository,
        Infrastructure $infrastructure
    ) {
        return $infrastructureRepository->destroy($infrastructure)
            ? to_route('infrastructure.index')->with('success', 'Infrastructure has been deleted successfully!')
            : to_route('infrastructure.index')->with('failed', 'Infrastructure was not deleted successfully!');
    }
}
