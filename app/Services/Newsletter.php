<?php

namespace App\Services;

interface Newsletter
{
    public function subcribe(string $email, string $list = null);
}
