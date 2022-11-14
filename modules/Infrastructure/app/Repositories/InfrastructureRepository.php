<?php

namespace Modules\Infrastructure\app\Repositories;

use Illuminate\Contracts\Pagination\LengthAwarePaginator;
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
}
