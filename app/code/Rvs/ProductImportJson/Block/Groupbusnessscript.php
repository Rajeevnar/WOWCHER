<?php

namespace Rvs\ProductImportJson\Block;

class Groupbusnessscript extends \Magento\Framework\View\Element\Template
{
    protected $productCollectionFactory;
    protected $categoryFactory;
    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        \Magento\Catalog\Model\ResourceModel\Product\CollectionFactory $productCollectionFactory,
        \Magento\Catalog\Model\CategoryFactory $categoryFactory,
        array $data = []
    ) {
        $this->productCollectionFactory = $productCollectionFactory;
        $this->categoryFactory = $categoryFactory;
        parent::__construct($context, $data);
    }
    public function getProductCollection()
    {
        
        $collection = $this->productCollectionFactory->create();
	$collection->addAttributeToSelect('*');
	//$collection->addAttributeToSelect(['id','sku']);
	$collection->addAttributeToFilter('type_id', ['eq' => 'grouped']);
	//$collection->addAttributeToFilter('status', ['eq' => 1]);
	echo count($collection).'<br />';
      foreach ($collection as $groupproduct)
        {
        echo $group_sku1 = $groupproduct->getSku().'<br />';
        $group_sku = $groupproduct->getMerchantEmail();
        $business_id = $groupproduct->getBusinessId();
        $gpro_id = $groupproduct->getId();
        $associatedProducts = $groupproduct->getTypeInstance()->getAssociatedProducts($groupproduct);
        //echo count($associatedProducts).'<br />';
        foreach ($associatedProducts as $product) {
           echo $sku = $product->getSku().'<br />';
            $pro_id = $product->getId();
            $objectManager = \Magento\Framework\App\ObjectManager::getInstance();
		$productRepository=$objectManager->get('\Magento\Catalog\Api\ProductRepositoryInterface'); 
		$product = $productRepository->getById($pro_id);
		$product->setMerchantEmail($group_sku);
		$product->setBusinessId($business_id);
		$product->getResource()->saveAttribute($product, 'merchant_email');
		$product->getResource()->saveAttribute($product, 'business_id');
        }
        }
        return $collection;
    }
}
