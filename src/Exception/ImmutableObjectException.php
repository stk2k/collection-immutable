<?php
namespace Stk2k\Collection\Immutable\Exception;

use Throwable;
use Exception;

use Stk2k\Collection\Immutable\ImmutableCollection;

class ImmutableObjectException extends Exception implements CollectionExceptionInterface
{
    /**
     * ImmutableObjectException constructor.
     *
     * @param ImmutableCollection $collection
     * @param int $code
     * @param Throwable|null $prev
     */
    public function __construct(ImmutableCollection $collection, int $code = 0 , Throwable $prev = null)
    {
        parent::__construct( 'Collection is immutable: ' . get_class($collection) . '@' . spl_object_hash($collection), $code, $prev );
    }
}


