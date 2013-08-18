<?php

namespace Acme\DemoBundle\Model;

use Symfony\Component\Validator\ExecutionContextInterface;

class Contact
{
    public $email;
    public $message;

    public function formPathError(ExecutionContextInterface $context)
    {
        $context->addViolationAt('invalidpath', 'This error will appear at the top of the form.');
    }
}