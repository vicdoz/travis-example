<?php
use PHPUnit\Framework\TestCase;


final class JsonSerializerTest extends TestCase
{
    public function testCanConvertObject()
    {

        $myObject = new \src\LivingRoom();
        $json = $myObject->toJson();
        $myLivingRoom = '{"magicNumber":3,"where":"I am at home","see":["dog","tv","xbox"]}';
        $this->assertEquals($json, $myLivingRoom);

    }


}



