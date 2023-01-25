Исполльзуем https://swagger.io/

### – необходимо добавить возможность отображать для продукта более одного изображения

Request example

GET /products?category=category-1&sort=name HTTP/1.1
Host: api.market.com
Authorization: Bearer 2YotnFZFEjr1zCsicMWpAA
Accept: application/json

Response example
HTTP/1.1 200 OK
Content-Type: application/json;charset=UTF-8

[{
    "id": 1,
    "name": "Example product 1",
    "description": "Example product 1 description",
    "image_url": "https://cdn.market.com/images/products/product_1.png",
    "category": "category-1",
    "s3_images_url": [{
        "https://cdn.market.com/images/products/product_1.png",
        "https://cdn.market.com/images/products/product_1.png",
        "https://cdn.market.com/images/products/product_1.png",
  }]
}, {
    "id": 4,
    "name": "Example product 4",
    "description": "Example product 4 description",
    "image_url": "https://cdn.market.com/images/products/product_4.png",
    "category": "category-1",
    "s3_images_url": [{
        "https://cdn.market.com/images/products/product_1.png",
        "https://cdn.market.com/images/products/product_1.png",
        "https://cdn.market.com/images/products/product_1.png",
    }]
},


### - избранные продукты должны отображаться с соответствующей пометкой в общем списке всех продуктов

Request example

GET /products?user=uuid&sort=name HTTP/1.1
Host: api.market.com
Authorization: Bearer 2YotnFZFEjr1zCsicMWpAA
Accept: application/json

Response example
HTTP/1.1 200 OK
Content-Type: application/json;charset=UTF-8

[{
    "id": 1,
    "name": "Example product 1",
    "description": "Example product 1 description",
    "image_url": "https://cdn.market.com/images/products/product_1.png",
    "category": "category-1",
    "s3_images_url": [{
        "https://cdn.market.com/images/products/product_1.png",
        "https://cdn.market.com/images/products/product_1.png",
        "https://cdn.market.com/images/products/product_1.png",
    }],
    "favorites": true
}, {
    "id": 4,
    "name": "Example product 4",
    "description": "Example product 4 description",
    "image_url": "https://cdn.market.com/images/products/product_4.png",
    "category": "category-1",
    "s3_images_url": [{
        "https://cdn.market.com/images/products/product_4.png",
        "https://cdn.market.com/images/products/product_4.png",
        "https://cdn.market.com/images/products/product_4.png",
    }],
    "favorites": false
},

предоставить авторизованному пользователю возможность добавлять продукты в избранное
POST
{
  product_id: xxxx,
  favorites: true
}


