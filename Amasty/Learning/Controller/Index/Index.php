<?php

namespace Amasty\Learning\Controller\Index;

use Magento\Framework\Controller\ResultFactory;

class Index extends \Magento\Framework\App\Action\Action
{

    public function execute()
    {


        $this->_view->loadLayout();

        $this->_view->renderLayout();
    }


}