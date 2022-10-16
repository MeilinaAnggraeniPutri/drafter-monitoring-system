<?php

namespace Modules\Infrastructure\app\Repositories;

use Modules\Infrastructure\app\Interfaces\InfrastructureInterface;
use Modules\Infrastructure\app\Models\Infrastructure;

class InfrastructureRepository implements InfrastructureInterface
{
  public function getCount()
  {
    return Infrastructure::count();
  }
}
