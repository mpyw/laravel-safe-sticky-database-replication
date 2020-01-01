<?php

namespace Mpyw\LaravelCachedDatabaseStickiness\Tests\Stubs\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Notification;
use Mpyw\LaravelCachedDatabaseStickiness\ShouldAssumeModified;

class ModifiedNotification extends Notification implements ShouldQueue, ShouldAssumeModified
{
    use Queueable;
}
