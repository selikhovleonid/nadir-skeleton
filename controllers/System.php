<?php

namespace controllers;

use nadir\core\AbstractWebCtrl;
use nadir\extensions\core\SystemCtrlInterface;
use nadir\core\Headers;

/**
 * This is system controller.
 * @author Leonid Selikhov
 */
class System extends AbstractWebCtrl implements SystemCtrlInterface
{

    /**
     * {@inheritdoc}
     */
    public function actionPage401(array $aErrors)
    {
        Headers::getInstance()->addByHttpCode(401)->run();
        // Put your code here...
        $this->render();
    }

    /**
     * {@inheritdoc}
     */
    public function actionPage403(array $aErrors)
    {
        Headers::getInstance()->addByHttpCode(403)->run();
        // Put your code here...
        $this->render();
    }

    /**
     * {@inheritdoc}
     */
    public function actionPage404(array $aErrors)
    {
        Headers::getInstance()->addByHttpCode(404)->run();
        // Put your code here...
        $this->render();
    }
}