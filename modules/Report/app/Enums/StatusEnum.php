<?php

namespace Modules\Report\app\Enums;

enum StatusEnum: string
{
  case PENDING = 'Pending'; // primary
  case PROCESSED = 'Processed'; // secondary

  case ACCEPTED = 'Accepted'; // success
  case REJECTED = 'Rejected'; // danger

  case CLOSED = 'Closed'; // dark
}
