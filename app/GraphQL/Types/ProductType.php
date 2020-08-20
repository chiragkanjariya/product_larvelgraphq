<?php 
        namespace App\GraphQL\Types;
         use App\Product; 
         use GraphQL\Type\Definition\Type; 
         use Rebing\GraphQL\Support\Type as GraphQLType; 
class ProductType extends GraphQLType { 
    protected $attributes = [ 
        'name' => 'Product',
        'description' => 'Details about a product',
        'model' => Product::class
    ];

    public function fields(): array
    {
        return [
            'id' => [
                'type' => Type::nonNull(Type::int()),
                'description' => 'Id of the product',
            ],
            'product_name' => [
                'type' => Type::nonNull(Type::string()),
                'description' => 'The name of the product',
            ],
            
            'quantity' => [
                'type' => Type::nonNull(Type::int()),
                'description' => 'The quantity of the product',
            ],
            
        ];
    }
}
