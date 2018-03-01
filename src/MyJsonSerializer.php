<?php
namespace src;


class MyJsonSerializer  implements \SerializerInterface {

    public function toJson() {
        return json_encode($this);
    }
}