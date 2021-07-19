<?php

namespace Source\Models;

use Source\Core\Model;

class ImageProduct extends Model{

    public function __construct()
    {
        return parent::__construct("image_size", ["id"], ["title", "id_service"]);
    }

    public function save(): bool
    {
        return parent::save();
    }

}

?>