<?php
namespace ImgManModule\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class IndexController extends AbstractActionController
{
    public function dispatchImageAction()
    {
        $viewModel = new ViewModel();
        return $viewModel;
    }
} 