<?php

class ErrorTest extends TestCase
{
    /**
     * @test
     */
    public function error_()
    {
        $this->call('GET', '/error');
        $this->assertResponseStatus(500);
    }
}
