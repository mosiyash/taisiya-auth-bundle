<?php

namespace Taisiya\AuthBundle\Database\UserinfoTable;

use Taisiya\PropelBundle\Database\AbstractColumn;

class EmailColumn extends AbstractColumn
{
    const NAME = 'email';

    /**
     * @return string
     */
    public function getName(): string
    {
        return self::NAME;
    }
}
