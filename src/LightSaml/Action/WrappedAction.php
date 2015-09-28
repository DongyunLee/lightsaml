<?php

namespace LightSaml\Action;

use LightSaml\Context\ContextInterface;

abstract class WrappedAction implements ActionInterface
{
    /**
     * @var ActionInterface
     */
    protected $action;

    /**
     * @param ActionInterface $action
     */
    public function __construct(ActionInterface $action)
    {
        $this->action = $action;
    }

    /**
     * @param ContextInterface $context
     *
     * @return void
     */
    public function execute(ContextInterface $context)
    {
        $this->beforeAction($context);
        $this->action->execute($context);
        $this->afterAction($context);
    }

    /**
     * @param ContextInterface $context
     */
    abstract protected function beforeAction(ContextInterface $context);

    /**
     * @param ContextInterface $context
     */
    abstract protected function afterAction(ContextInterface $context);
}
