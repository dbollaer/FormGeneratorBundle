<?php

namespace Codete\FormGeneratorBundle\Tests\Model;

use Codete\FormGeneratorBundle\Annotations as Form;

class Simple
{
    public $id;
    
    /**
     * @Form\Field(type="text")
     */
    public $title;
}
