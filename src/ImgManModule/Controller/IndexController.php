<?php
namespace ImgManModule\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class IndexController extends AbstractActionController
{
    public function testImageAction()
    {
        $viewModel = new ViewModel();
        return $viewModel;
    }
} 