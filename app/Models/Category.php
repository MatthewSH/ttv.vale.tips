<?php

namespace App\Models;

use \Rinvex\Categories\Models\Category as RinvexCategory;

class Category extends RinvexCategory
{
    public function getRouteKeyName()
    {
        return 'slug';
    }
}