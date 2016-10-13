<?php

namespace Taisiya\AuthBundle\Database\DefaultDatabase;

use Taisiya\AuthBundle\Database\DefaultDatabase\UserInfoTable\AccountIdColumn;
use Taisiya\AuthBundle\Database\DefaultDatabase\UserInfoTable\EmailColumn;
use Taisiya\AuthBundle\Database\DefaultDatabase\UserInfoTable\EmailUnique;
use Taisiya\AuthBundle\Database\DefaultDatabase\UserInfoTable\FullnameColumn;
use Taisiya\PropelBundle\Database\Table;

final class UserInfoTable extends Table
{
    /**
     * {@inheritdoc}
     */
    public static function getName(): string
    {
        return 'userinfo';
    }

    public function __construct()
    {
        $this->createColumnIfNotExists(new AccountIdColumn());
        $this->createColumnIfNotExists(new EmailColumn());
        $this->createColumnIfNotExists(new FullnameColumn());

        $this->addUnique(new EmailUnique());
    }
}
