<?php

namespace App\Nova\Dashboards;

use App\Nova\Metrics\PostCount;
use App\Nova\Metrics\PostsPerCategory;
use App\Nova\Metrics\PostsPerDay;
use Laravel\Nova\Dashboards\Main as Dashboard;

class Main extends Dashboard
{
    /**
     * Get the cards for the dashboard.
     *
     * @return array
     */
    public function cards()
    {
        return [
//            new Help,
            new PostCount,
            new PostsPerDay,
            new PostsPerCategory,
        ];
    }
}
