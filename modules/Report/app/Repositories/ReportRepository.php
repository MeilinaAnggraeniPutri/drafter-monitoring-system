<?php

namespace Modules\Report\app\Repositories;

use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Http\Request;
use Modules\Report\app\Http\Requests\UpdateReportUserRequest;
use Modules\Report\app\Interfaces\ReportInterface;
use Modules\Report\app\Models\Report;

class ReportRepository implements ReportInterface
{
  /**
   * getCount
   */
  public function getCount()
  {
    return auth()->user()->hasRole('User')
      ? $this->getUserCount()
      : $this->getAllCount();
  }

  protected function getUserCount()
  {
    return Report::query()
      ->whereBelongsTo(auth()->user())
      ->count();
  }

  protected function getAllCount()
  {
    return Report::count();
  }

  /**
   * getAll
   */
  public function getAll(int $paginate = 10): LengthAwarePaginator
  {
    return auth()->user()->hasRole('User')
      ? $this->getListForUser($paginate)
      : $this->getListForAdmin($paginate);
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

  /**
   * store
   */
  public function store(Request $request): bool | Report
  {
    $attach = $this->storeAttach($request);

    return Report::create(
      $this->mergeRequest($request, $attach)
    );
  }

  protected function mergeRequest(Request $request, string $attach)
  {
    return array_merge(
      $request->validated(),
      array(
        'attach' => $attach,
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

    $attach = $request->file('attach');

    foreach ($attach as $file) {
      $fileName = str()->uuid()->toString() . '.' . $file->extension();

      $file->move(public_path('assets/files/'), $fileName);

      array_push($contents, $fileName);
    }

    return json_encode($contents);
  }

  /**
   * update
   */
  public function update(Request $request, Report $report)
  {
    if ($request->_c2VuZGVy === 'VXNlcg==') {
      return $this->updateUser($request, $report);
    }

    if ($request->_c2VuZGVy === 'U3VwZXIgQWRtaW4=') {
      return $this->updateSuperAdmin($request, $report);
    }

    return false;
  }

  protected function updateUser(Request $request, Report $report)
  {
    $validated = $this->validateUser($request);

    $attach = $this->storeAttach($request);

    return $report->update(
      array_merge(
        $validated,
        [
          'attach' => $attach,
        ]
      )
    );
  }

  protected function updateSuperAdmin(Request $request, Report $report)
  {
    $validated = $this->validateSuperAdmin($request);

    return $report->update(
      $validated
    );
  }

  protected function validateUser(Request $request)
  {
    return $request->validate([
      'title' => ['required', 'string'],
      'attach.*' => ['nullable', 'file'],
      'description' => ['nullable', 'string'],
    ]);
  }

  protected function validateSuperAdmin(Request $request)
  {
    return $request->validate([
      'status' => ['required', 'string'],
      'comment' => ['nullable', 'string']
    ]);
  }
}
