<?php

namespace Taisiya\AuthBundle\Composer\Event;

use Composer\EventDispatcher\Event;
use Taisiya\AuthBundle\Database\DefaultDatabase\AccountTable;
use Taisiya\AuthBundle\Database\DefaultDatabase\UserInfoTable;
use Taisiya\PropelBundle\Database\DefaultDatabase;
use Taisiya\PropelBundle\Database\Schema;

class BuildPropelSchemaSubscriber extends \Taisiya\PropelBundle\Composer\Event\BuildPropelSchemaSubscriber
{
    public function buildPropelSchema(Event $event): void
    {
        $this->buildDefaultDatabaseSchema($event);
    }

    private function buildDefaultDatabaseSchema(Event $event)
    {
        /** @var Schema $schema */
        $schema = $event->getArguments()['schema'];

        $database = $schema
            ->createDatabaseIfNotExists(new DefaultDatabase())
            ->getDatabase(DefaultDatabase::getName());

        $database
            ->createTableIfNotExists(new AccountTable())
            ->getTable(AccountTable::getName())
            ->createColumnIfNotExists(new AccountTable\IdColumn())
            ->createColumnIfNotExists(new AccountTable\UsernameColumn())
            ->createColumnIfNotExists(new AccountTable\PasswordColumn());

        $database
            ->createTableIfNotExists(new UserInfoTable())
            ->getTable(UserInfoTable::getName())
            ->createColumnIfNotExists(new UserInfoTable\AccountIdColumn())
            ->createColumnIfNotExists(new UserInfoTable\EmailColumn())
            ->createColumnIfNotExists(new UserInfoTable\FullnameColumn());
    }
}
