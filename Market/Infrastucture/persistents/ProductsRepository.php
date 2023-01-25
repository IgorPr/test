<?php

namespace Market\Infrastucture\persistents;

use Cassandra\Uuid;

class ProductsRepository implements ProductsRepositoryInterface
{
    public function addToFavorites(int $productId, Uuid $uuid): bool
    {
        // TODO: Implement addToFavorites() method.
    }

    public function getProducts(Uuid $uuid, \FilterIterator $filters): ProductCollection
    {
        // TODO: Implement getProducts() method.
    }

    public function getFavoritesProducts(Uuid $uuid, \FilterIterator $filters): ProductCollection
    {
        // TODO: Implement getFavoritesProducts() method.
    }
}
