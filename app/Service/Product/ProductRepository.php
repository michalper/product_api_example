<?php

namespace App\Service\Product;

use App\Models\Product;

/**
 * Class ProductService
 * @package App\Service\Product
 */
class ProductRepository implements ProductRepositoryInterface
{
    /**
     * @var Product
     */
    private Product $model;

    public function __construct(Product $model)
    {
        $this->model = $model;
    }

    /**
     * @param array $data
     * @return int
     */
    public function insert(array $data): int
    {
        $this->model->save($data);

        return $this->model->id;
    }
}