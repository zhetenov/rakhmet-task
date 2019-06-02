<?php

namespace App\Services;


use App\Model\ProductCategory;

class ProductCategoryInteractionService
{
    public function createProductCategories($product_id, $category_ids)
    {
        foreach ($category_ids as $category) {
            ProductCategory::create([
                'product_id' => $product_id,
                'category_id' => $category
            ]);
        }
    }
}
