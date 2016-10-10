<?php

namespace Taisiya\AuthBundle\Database\UserinfoTable;

use Taisiya\PropelBundle\Database\AbstractColumn;

class FullnameColumn extends AbstractColumn
{
    const NAME = 'fullname';

    /**
     * @return string
     */
    public function getName(): string
    {
        return self::NAME;
    }
}
