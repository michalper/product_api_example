<?php

namespace App\Service\Product;

use App\Models\Product;

interface ProductRepositoryInterface
{
    /**
     * ProductRepositoryInterface constructor.
     * @param Product $model
     */
    public function __construct(Product $model);

    /**
     * @param array $data
     * @return int
     */
    public function insert(array $data): int;
}