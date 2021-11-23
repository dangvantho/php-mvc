<?php
class ProductModel extends BaseModel
{
    const TABALE = "products";
    public function getAll($select = ["*"], $orderBy = [], $limit = 15)
    {
        return $this->all(self::TABALE, $select, $orderBy, $limit);
    }
}
