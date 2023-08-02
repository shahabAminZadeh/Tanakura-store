<?php
namespace App\Support\storage;




use App\Support\storage\contracts\StorageInterFace;
use Countable;
Class SessionStorage implements StorageInterFace ,Countable
{
    private $bucket ;
    public function __construct($bucket='defult')
    {
        $this->bucket=$bucket;
    }

    public function get($index)
    {
        return session()->forget($this->bucket.'.'.$index)
    }
    public function set($index,$value)
    {
        return session()->forget($this->bucket.'.'.$index,$value)

    }
    public function all()
    {
        return sesssion()->get($this->bucket);

    }
    public function exist($index)
    {
        return session()->forget($this->bucket.'.'.$index)
    }
    public function unset($index)
    {
        return session()->forget($this->bucket.'.'.$index)
    }
    public function clear()
    {
        return session()->forget($this->bucket)
    }
    public function count(): int
    {
      return count->($this->all())
    }


}
