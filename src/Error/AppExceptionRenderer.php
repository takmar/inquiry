<?php
namespace App\Error;

use App\Controller\InquiryController;
use Cake\Error\ExceptionRenderer;

class AppExceptionRenderer extends ExceptionRenderer
{
    protected function _getController()
    {
        return new InquiryController();
    }

    protected function _outputMessage($template)
    {
        $this->controller->render('error');

        return $this->_shutdown();
    }
}
