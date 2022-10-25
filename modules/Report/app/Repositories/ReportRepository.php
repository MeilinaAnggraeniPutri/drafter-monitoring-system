<?php

namespace Modules\Report\app\Repositories;

use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Http\Request;
use Modules\Report\app\Interfaces\ReportInterface;
use Modules\Report\app\Models\Report;

class ReportRepository implements ReportInterface
{
  public function getCount()
  {
    return Report::count();
  }

  public function getAll(int $paginate = 10): LengthAwarePaginator
  {
    return auth()->user()->hasRole('User')
      ? $this->getListForUser($paginate)
      : $this->getListForAdmin($paginate);
  }

  public function store(Request $request): bool | Report
  {
    $image = $this->storeAttach($request);

    return Report::create(
      $this->mergeRequest($request, $image)
    );
  }

  protected function mergeRequest(Request $request, string $image)
  {
    return array_merge(
      $request->validated(),
      array(
        'attach' => $image,
        'user_id' => auth()->id()
      )
    );
  }

  protected function storeAttach(Request $request): string
  {
    $contents = array();

    if (!$request->has('attach')) {
      return json_encode($contents);
    }

    $files = $request->file('attach');

    foreach ($files as $file) {
      $fileName = str()->uuid()->toString() . '.' . $file->extension();

      $file->move(public_path('assets/files/'), $fileName);

      array_push($contents, $fileName);
    }

    return json_encode($contents);
  }

  protected function getListForUser(int $paginate = 10): LengthAwarePaginator
  {
    return Report::query()
      ->whereBelongsTo(
        related: auth()->user()
      )
      ->with('user')
      ->latest()
      ->paginate($paginate);
  }

  protected function getListForAdmin(int $paginate = 10): LengthAwarePaginator
  {
    return Report::query()
      ->with('user')
      ->latest()
      ->paginate($paginate);
  }
}
