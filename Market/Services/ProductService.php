<?php

namespace Market\Services;

use Cassandra\Uuid;
use Market\Infrastucture\persistents\ProductsRepositoryInterface;

class ProductService
{
    private ProductsRepositoryInterface $productRepository;
    private CurrentUser $user;
    public function __construct(ProductsRepositoryInterface $productsRepository, CurrentUser $user)
    {
        $this->productRepository = $productsRepository;
        $this->user = $user;
    }

    public function addToFavorites(int $productId, Uuid $uuid): bool
    {
        return $this->user->isAuthorized() ? $this->productRepository->addToFavorites($productId, $uuid): false;
    }

    public function getProducts(Uuid $uuid, FilterIterator $filters): ProductCollection
    {
        return $this->productRepository->getProducts($uuid, $filters);
    }

    public function getFavoritesProducts(Uuid $uuid, FilterIterator $filters): ProductCollection
    {
        return $this->productRepository->getProducts($uuid, $filters);
    }
}
