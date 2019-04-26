<?php

namespace Amasty\Learning\Controller\Index;

use Magento\Framework\Controller\ResultFactory;
use Magento\Catalog\Model\ProductRepository;
use Magento\Checkout\Model\Cart;
use Magento\Framework\App\Action\Action;

class Add extends Action
{
    protected $cart;
    protected $productRepository;
    protected $context;

    public function __construct(
        ProductRepository $productRepository,
        Cart $cart,
        \Magento\Framework\App\Action\Context $context

    ) {
      $this->productRepository = $productRepository;
      $this->cart = $cart;
      $this->context = $context;

        parent::__construct($context);
    }


    public function execute()
    {

        $sku = $this->context->getRequest()->getParam('sku');

        $product = $this->productRepository->get($sku);
        $params = $this->getRequest()->getParams();


        $this->cart->addProduct($product, $params);

        $this->cart->save();


    }


}