<?php
namespace Amasty\Learning\Plugin;


use Magento\Framework\App\Action\Context as Context;
use Magento\Catalog\Api\ProductRepositoryInterface;
use Magento\Framework\App\RequestInterface;
use Magento\Checkout\Controller\Cart\Add;


class CartPlugin {
    protected $productRepository;
    protected $context;

    public function __construct(
        ProductRepositoryInterface $productRepository,
        Context $context
    )
    {
        $this->productRepository = $productRepository;
        $this->context = $context;

    }



    public function beforeExecute()
    {

        $sku = $this->context->getRequest()->getParam('sku');
        $product = $this->productRepository->get($sku);
        $productId = $product->getId();
        $params = array(
            'product' => $productId,
            'qty' => '1',

        );
        $this->context->getRequest()->setParams($params);

    }

}

?>