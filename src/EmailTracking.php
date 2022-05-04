<?php

namespace AppsInteligentes\EmailTracking;

use AppsInteligentes\EmailTracking\Nova\EmailTrackingTool;
use Laravel\Nova\Fields\MorphMany;

class EmailTracking
{
    public static function hasManyEmailsField(string $label = null): MorphMany
    {
        return MorphMany::make(
            $label === null ? __('email-tracking::resources.emails') : $label,
            'emails',
            EmailTrackingTool::$emailResource
        );
    }
}
