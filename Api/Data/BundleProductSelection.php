<?php

namespace BigBridge\ProductImport\Api\Data;

/**
 * @author Patrick van Bergen
 */
class BundleProductSelection
{
    /** @var string */
    protected $sku;
    
    /** @var bool */
    protected $isDefault;

    /** @var int */
    protected $priceType;

    /** @var string */
    protected $priceValue;

    /** @var string */
    protected $quantity;

    /** @var bool */
    protected $canChangeQuantity;

    /** @var int */
    protected $productId;

    public function __construct(string $sku, bool $isDefault, int $priceType, string $priceValue, string $quantity, bool $canChangeQuantity)
    {
        $this->sku = $sku;
        $this->isDefault = $isDefault;
        $this->priceType = $priceType;
        $this->priceValue = $priceValue;
        $this->quantity = $quantity;
        $this->canChangeQuantity = $canChangeQuantity;
    }

    /**
     * @return string
     */
    public function getSku(): string
    {
        return $this->sku;
    }

    /**
     * @return bool
     */
    public function isDefault(): bool
    {
        return $this->isDefault;
    }

    /**
     * @return int
     */
    public function getPriceType(): int
    {
        return $this->priceType;
    }

    /**
     * @return string
     */
    public function getPriceValue(): string
    {
        return $this->priceValue;
    }

    /**
     * @return string
     */
    public function getQuantity(): string
    {
        return $this->quantity;
    }

    /**
     * @return bool
     */
    public function isCanChangeQuantity(): bool
    {
        return $this->canChangeQuantity;
    }

    /**
     * @return int
     */
    public function getProductId(): int
    {
        return $this->productId;
    }

    /**
     * @param int $productId
     */
    public function setProductId(int $productId)
    {
        $this->productId = $productId;
    }
}