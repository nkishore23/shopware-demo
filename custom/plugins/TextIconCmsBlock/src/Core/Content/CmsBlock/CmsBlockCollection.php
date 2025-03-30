<?php declare(strict_types=1);

namespace TextIconCms\Core\Content\CmsBlock;

use Shopware\Core\Framework\DataAbstractionLayer\EntityCollection;

/**
 * @method void add(CmsBlockEntity $entity)
 * @method void set(string $key, CmsBlockEntity $entity)
 * @method CmsBlockEntity[] getIterator()
 * @method CmsBlockEntity[] getElements()
 * @method CmsBlockEntity|null get(string $key)
 * @method CmsBlockEntity|null first()
 * @method CmsBlockEntity|null last()
 */
class CmsBlockCollection extends EntityCollection
{
    protected function getExpectedClass(): string
    {
        return CmsBlockEntity::class;
    }
}
