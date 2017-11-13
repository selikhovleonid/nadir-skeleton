<?php

namespace models;

use extensions\core\AbstractModel;

/**
 * This's demo version of model class.
 * @author Leonid Selikhov
 */
class Test extends AbstractModel
{

    public function readDefault()
    {
        return array(
            'foo' => 'bar',
            'bar' => array(42, 'baz')
        );
    }
}