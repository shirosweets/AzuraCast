<?php

declare(strict_types=1);

namespace App\Radio\Enums;

interface AdapterTypeInterface
{
    public function getName(): string;

    public function getClass(): string;
}
