<?php

namespace App\Traits;

trait slug
{

    public function generateSlug($title)
    {
        return strtolower(str_replace('', '-', $title));
    }
    

}
