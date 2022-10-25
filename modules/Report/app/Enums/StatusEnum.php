<?php

namespace Modules\Report\app\Enums;

enum StatusEnum: string
{
  case ACCEPTED = 'Accepted';
  case REJECTED = 'Rejected';

  case PENDING = 'Pending';
  case PROCESSED = 'Processed';

  case CLOSED = 'Closed';
}
