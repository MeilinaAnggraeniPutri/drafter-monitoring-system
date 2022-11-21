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
    $thumbnail = $this->storeThumbnail($request);

    return Infrastructure::create(
      $this->mergeRequest($request, $thumbnail)
    );
  }

  public function update(Request $request, Infrastructure $infrastructure)
  {
    $image = $request->hasFile('thumbnail')
      ? $this->storeThumbnail($request)
      : $infrastructure->thumbnail;

    return $infrastructure->update(
      $this->mergeRequest($request, $image)
    );
  }

  protected function storeThumbnail(Request $request): string
  {
    $name = str()->uuid()->toString() . '.' . $request->file('thumbnail')->extension();

    $request->file('thumbnail')->move(public_path('assets/infrastructures'), $name);

    return $name;
  }

  protected function mergeRequest(Request $request, string $thumbnail)
  {
    return array_merge(
      $request->validated(),
      [
        'slug' => str($request->title)->slug(),
        'thumbnail' => $thumbnail,
        'user_id' => auth()->id()
      ]
    );
  }
}
