<?php

namespace Modules\Report\app\Repositories;

use Illuminate\Contracts\Pagination\LengthAwarePaginator;
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
    return Report::query()
      ->with('user')
      ->latest()
      ->paginate($paginate);
  }
}
