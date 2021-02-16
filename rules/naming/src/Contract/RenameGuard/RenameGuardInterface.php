<?php

declare(strict_types=1);

namespace Rector\Naming\Contract\RenameGuard;

use Rector\Naming\Contract\Guard\ConflictingGuardInterface;
use Rector\Naming\ValueObject\PropertyRename;

interface RenameGuardInterface
{
    /**
     * @param ConflictingGuardInterface[] $guards
     */
    public function shouldSkip(PropertyRename $renameValueObject, array $guards): bool;
}
