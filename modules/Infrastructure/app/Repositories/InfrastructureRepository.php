<?php

namespace Modules\Infrastructure\app\Repositories;

use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Http\Request;
use Modules\Infrastructure\app\Interfaces\InfrastructureInterface;
use Modules\Infrastructure\app\Models\Infrastructure;

class InfrastructureRepository implements InfrastructureInterface
{
  public function getCount()
  {
    return Infrastructure::count();
  }

  public function getAll(int $paginate = 10): LengthAwarePaginator
  {
    return Infrastructure::query()
      ->with('user')
      ->latest()
      ->paginate($paginate);
  }

  public function store(Request $request)
  {
    $file_pdf = $this->storeThumbnail($request);

    return Infrastructure::create(
      $this->mergeRequest($request, $file_pdf)
    );
  }

  public function update(Request $request, Infrastructure $infrastructure)
  {
    $image = $request->hasFile('file_pdf')
      ? $this->storeThumbnail($request)
      : $infrastructure->file_pdf;

    return $infrastructure->update(
      $this->mergeRequest($request, $image)
    );
  }

  public function destroy(Infrastructure $infrastructure)
  {
    return $infrastructure->delete();
  }

  protected function storeThumbnail(Request $request): string
  {
    $name = str()->uuid()->toString() . '.' . $request->file('file_pdf')->extension();

    $request->file('file_pdf')->move(public_path('assets/infrastructures'), $name);

    return $name;
  }

  protected function mergeRequest(Request $request, string $file_pdf)
  {
    return array_merge(
      $request->validated(),
      [
        'file_pdf' => $file_pdf,
        'user_id' => $request->user_id
      ]
    );
  }
}
