<?php
namespace ImgManModule\Controller;

use ImgManLibrary\Entity\ImageEntity;
use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class IndexController extends AbstractActionController
{
    public function dispatchImageAction()
    {
        $viewModel = new ViewModel();
        /* @var $serviceImgMan \ImgManLibrary\Service\ServiceInterface */
        $serviceImgMan = $this->getServiceLocator()->get('ImgMan\Service\Test');

        $serviceImgMan->delete('prova/prova/prova');
        $serviceImgMan->delete('prova/prova/prova', 'thumb');
        $serviceImgMan->delete('prova/prova/prova', 'thumbMaxi');
        $serviceImgMan->delete('prova/prova/prova', 'ex');

        $entity = new ImageEntity(__DIR__. '/../../prova.png');
        $serviceImgMan->grab($entity, 'prova/prova/prova');

        $image = $serviceImgMan->get('prova/prova/prova', 'ex');

        // $image = $serviceImgMan->get('prova/prova/prova', 'thumb');

        //  $image = $serviceImgMan->get('prova/prova/prova', 'thumbMaxi');

        header("Content-Type: " . $image->getMimeType());
        header("Content-Size: " . strlen($image->getBlob()));

        echo $image->getBlob();
        //   var_dump('ccccc');

        exit;
        //return $viewModel->setVariable('img', $image);
    }
} 