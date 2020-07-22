<?php
/* File: app/code/Haruta/Nutrients/Block/Cart/Additional/Nutrients.php */
namespace Haruta\Nutrients\Block\Cart\Additional;

use Magento\Catalog\Api\Data\ProductInterface;
use Magento\Catalog\Api\Data\ProductInterfaceFactory;
use Magento\Catalog\Model\Product;
use Magento\Checkout\Block\Cart\Additional\Info as AdditionalBlockInfo;
use Magento\Framework\Exception\LocalizedException;
use Magento\Framework\View\Element\Template as ViewTemplate;
use Magento\Framework\View\Element\Template\Context;


/**
 * Class CartItemBrandBlock
 */
class Nutrients extends ViewTemplate
{
    /**
     * Product
     *
     * @var ProductInterface|null
     */
    protected $product = null;
    /**
     * Product Factory
     *
     * @var ProductInterfaceFactory
     */
    protected $productFactory;

    /**
     * CartItemBrandBlock constructor
     *
     * @param Context $context
     * @param ProductInterfaceFactory $productFactory
     */
    public function __construct(
        Context $context,
        ProductInterfaceFactory $productFactory
    ) {
        parent::__construct($context);
        $this->productFactory = $productFactory;
    }
    /**
     * Get Product Brand Text
     *
     * @return string
     */
    public function getCalories(): string
    {
        $product = $this->getProduct();
        /** @var Product $product */
        return (string) round($product->getData('nutrients_calories'), 3);
    }
    public function getCarb():string
    {
        $product = $this->getProduct();
        /** @var Product $product */
        return (string) round($product->getData('nutrients_carb'), 3);
    }
    public function getProductName():string
    {
        return $this->getProduct()->getName();
    }
    /**
     * Get product from quote item
     *
     * @return ProductInterface
     */
    public function getProduct(): ProductInterface
    {
        try {
            $layout = $this->getLayout();
        } catch (LocalizedException $e) {
            $this->product = $this->productFactory->create();
            return $this->product;
        }
        /** @var AdditionalBlockInfo $block */
        $block = $layout->getBlock('additional.product.info');
        if ($block instanceof AdditionalBlockInfo) {
            $item = $block->getItem();
            $this->product = $item->getProduct();
        }
        return $this->product;
    }
}
