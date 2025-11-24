<?php

namespace Study\Design\Shop\Models;

class Order
{
    private Product $product;
    
    private float $amount;
    
    private Client $client;
    
    public function __construct(Product $product, float $amount, Client $client)
    {
        $this->setProduct($product);
        $this->setAmount($amount);
        $this->setClient($client);
    }
    
    public function getProduct(): Product
    {
        return $this->product;
    }
    
    public function setProduct(Product $product): void
    {
        $this->product = $product;
    }
    
    public function getAmount(): float
    {
        return $this->amount;
    }
    
    public function setAmount(float $amount): void
    {
        $this->amount = $amount;
    }
    
    public function getClient(): Client
    {
        return $this->client;
    }
    
    public function setClient(Client $client): void
    {
        $this->client = $client;
    }
}