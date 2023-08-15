<?php
namespace App\Support\Basket;


use App\Exceptions\QuantityExceededException;
use App\Models\Pro;
use App\Support\storage\Contracts\StorageInterFace;


class Basket
{
    private $storage;
    public function __construct(StorageInterFace $storage)
    {
        $this->storage = $storage;
    }
    public function add(Pro $pro, int $qty)
    {
        if ($this->has($pro))
        {
            $qty = $this->get($pro)['qty'] + $qty;
        }

        $this->update($pro,$qty);

    }
    public function update(Pro $pro,int $qty)
    {
        if (!$pro->hasStock($qty))
        {
            throw new QuantityExceededException();
        }


        $this->storage->set($pro->id,
            [
                'qty'=>$qty,

            ]);
    }
    public function itemCount()
    {
        return $this->storage->count();
    }
    public function get(Pro $pro)
    {
        return $this->storage->get($pro->id);
    }
    public function has(Pro $pro)
    {
        return $this->storage->exist($pro->id);
    }

    public function all()
    {
        $pros=Pro::find(array_keys($this->storage->all()));
        foreach ($pros as $pro)
        {
            $pro->qty = $this->get($pro)['qty'];
        }
        return $pros;
    }


}
