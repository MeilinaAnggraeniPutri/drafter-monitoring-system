<?php

namespace Modules\Report\app\Enums;

enum StatusEnum: string
{
  case PENDING = 'Pending';
  case PROCESSED = 'Processed';

  case ACCEPTED = 'Accepted';
  case REJECTED = 'Rejected';

  case CLOSED = 'Closed';
}
