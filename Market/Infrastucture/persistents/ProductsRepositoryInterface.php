<?php

namespace Market\Infrastucture\persistents;

use Cassandra\Uuid;
use Market\domain\entities\Product;

interface ProductsRepositoryInterface
{
    public function addToFavorites(int $productId, Uuid $uuid): bool;

    public function getProducts(Uuid $uuid, \FilterIterator $filters): ProductCollection;
    public function getFavoritesProducts(Uuid $uuid, \FilterIterator $filters): ProductCollection;
}
