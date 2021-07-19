<?php

namespace Source\Models;

use Source\Core\Model;

/**
 * Class Colors
 * @package Source\Models
 */
class Colors extends Model
{
    /**
     * Post constructor.
     */
    public function __construct()
    {
        parent::__construct("color_products", ["id"], ["color_code","id_product"]);
    }



    /**
     * @return bool
     */
    public function save(): bool
    {

        return parent::save();
    }
}