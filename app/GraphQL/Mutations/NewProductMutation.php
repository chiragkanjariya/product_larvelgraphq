<?php 
    namespace App\GraphQL\Mutations; 
    use Rebing\GraphQL\Support\Facades\GraphQL;
    use GraphQL\Type\Definition\Type; 
    use Rebing\GraphQL\Support\Mutation; 
    use App\Product; 
    class NewProductMutation extends Mutation 
     { 
      protected $attributes = [ 
      'name' => 'newProduct'
    ];

    public function type(): Type
    {
        return GraphQL::type('Product');
    }

    public function args(): array
    {
        return [
            'name' => [
                'product_name' => 'product_name',
                'type' => Type::nonNull(Type::string())
            ],
            'sku' => [
                'name' => 'sku',
                'type' =>  Type::nonNull(Type::string()),
            ],
            'quantity' => [
                'name' => 'quantity',
                'type' =>  Type::nonNull(Type::int()),
            ],

            'category' => [
                'name' => 'category',
                'type' =>  Type::nonNull(Type::string()),
            ],

            'sub_category' => [
                'name' => 'sub_category',
                'type' =>  Type::nonNull(Type::string()),
            ],
        ];
    }
    public function resolve($rootValue, array $args)
    {
        $product = new Product();
        $product->fill($args);
        $product->save();
        return $product;
    }
}
