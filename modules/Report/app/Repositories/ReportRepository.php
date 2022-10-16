<?php

namespace Modules\Report\app\Repositories;

use Modules\Report\app\Interfaces\ReportInterface;
use Modules\Report\app\Models\Report;

class ReportRepository implements ReportInterface
{
  public function getCount()
  {
    return Report::count();
  }
}
