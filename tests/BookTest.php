<?php

class BookTest extends TestCase
{
    /**
     * @test
     */
    public function books_()
    {
        $this->call('GET', '/books');
        $response = json_decode($this->response->content());

        $this->assertCount(3, $response);
        $this->assertSame('4844339451', $response[0]->asin);
    }
}
