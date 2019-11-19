<?php
namespace Stk2k\Collection\Immutable;

use Stk2k\Collection\Util\PhpArrayTrait;
use Stk2k\Collection\Immutable\Exception\ImmutableObjectException;

class ImmutableStack extends ImmutableCollection
{
    use PhpArrayTrait;

    /**
     * @return ImmutableStack
     */
    protected function getSelf()
    {
        return $this;
    }

    /**
     * Push item to the top of stack
     *
     * @param $item
     *
     * @throws ImmutableObjectException
     */
    public function push(/** @noinspection PhpUnusedParameterInspection */$item)
    {
        throw new ImmutableObjectException($this);
    }

    /**
     * Pop item from stack
     *
     * @return mixed
     *
     * @throws ImmutableObjectException
     */
    public function pop()
    {
        throw new ImmutableObjectException($this);
    }
}