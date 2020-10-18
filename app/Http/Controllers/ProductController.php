<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductStore;
use App\Service\Product\ProductRepositoryInterface;
use Illuminate\Contracts\Routing\ResponseFactory;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;

class ProductController extends Controller
{
    /**
     * @var ProductRepositoryInterface
     */
    private ProductRepositoryInterface $productRepository;

    /**
     * @var ResponseFactory
     */
    private ResponseFactory $responseFactory;

    /**
     * ProductController constructor.
     * @param ProductRepositoryInterface $productRepository
     * @param ResponseFactory $responseFactory
     */
    public function __construct(
        ProductRepositoryInterface $productRepository,
        ResponseFactory $responseFactory
    )
    {
        $this->productRepository = $productRepository;
        $this->responseFactory = $responseFactory;
    }

    public function create(ProductStore $request): JsonResponse
    {
        $productId = $this->productRepository->insert($request->validated());

        return $this->responseFactory->json(['product' => ['id' => $productId]], Response::HTTP_CREATED);
    }
}
