<?php

namespace Abdo\AlgeriaWilayas\Tests;

use Abdo\AlgeriaWilayas\Enums\Wilaya;
use Orchestra\Testbench\TestCase;

class WilayaTest extends TestCase
{
    /** @test */
    public function it_can_retrieve_code_of_wilaya()
    {
        $wilaya = Wilaya::Adrar;
        $code = $wilaya->getCode();
        
        $this->assertEquals('01', $code);
    }
    
    /** @test */
    public function it_can_retrieve_name_of_wilaya()
    {
        $wilaya = Wilaya::Adrar;
        $name = $wilaya->getName(1);
        
        $this->assertEquals('Adrar', $name);
    }
    
    /** @test */
    public function it_can_retrieve_arabic_name_of_wilaya()
    {
        $wilaya = Wilaya::Adrar;
        $arabicName = $wilaya->getArabicName(1);
        
        $this->assertEquals('أدرار', $arabicName);
    }
    
    /** @test */
    public function it_can_retrieve_longitude_of_wilaya()
    {
        $wilaya = Wilaya::Adrar;
        $longitude = $wilaya->getLongitude(1);
        
        $this->assertEquals('0.2936', $longitude);
    }
    
    /** @test */
    public function it_can_retrieve_latitude_of_wilaya()
    {
        $wilaya = Wilaya::Adrar;
        $latitude = $wilaya->getLatitude(1);
        
        $this->assertEquals('27.8742', $latitude);
    }
}