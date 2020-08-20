<?php

namespace App\GraphQL\Types;

use App\Product;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Type as GraphQLType;

class ProductType extends GraphQLType
{
    protected $attributes = [
        'name' => 'Product',
        'description' => 'Product APIs',
        'model' => Product::class
    ];

    public function fields()
    {
        return [
            'id' => [
                'type' => Type::nonNull(Type::int()),
                'description' => 'Id of the wine',
            ],
            'product_name' => [
                'type' => Type::nonNull(Type::string()),
                'description' => 'The name of the product',
            ],
            'product_image' => [
                'type' => Type::nonNull(Type::string()),
                'description' => 'Image of product',
            ],
            'quantity' => [
                'type' => Type::nonNull(Type::string()),
                'description' => 'The quantity of product',
            ],
            'category' => [
                'type' => Type::nonNull(Type::string()),
                'description' => 'The category of products',
            ],
            'sub_category' => [
                'type' => Type::nonNull(Type::string()),
                'description' => 'The Subcategory of Product',
            ]
        ];
    }
}