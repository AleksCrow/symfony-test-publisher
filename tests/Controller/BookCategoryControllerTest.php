<?php

namespace App\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class BookCategoryControllerTest extends WebTestCase
{
    protected static function getKernelClass(): string
    {
        return \App\Kernel::class;
    }

    public function testCategories()
    {
        $client = static::createClient();
        $client->request('GET', '/api/v1/book/categories');

        $responseContent = $client->getResponse()->getContent();

        $this->assertResponseIsSuccessful();
        $this->assertJsonStringEqualsJsonFile(__DIR__.'/response/BookCategoryControllerTest_testCategories.json', $responseContent);
    }
}
