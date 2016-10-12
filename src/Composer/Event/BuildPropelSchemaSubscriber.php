<?php

namespace Taisiya\AuthBundle\Composer\Event;

use Composer\EventDispatcher\Event;
use Taisiya\AuthBundle\Database\DefaultDatabase\AccountTable;
use Taisiya\AuthBundle\Database\DefaultDatabase\AccountTable\IdColumn;
use Taisiya\AuthBundle\Database\DefaultDatabase\AccountTable\PasswordColumn;
use Taisiya\AuthBundle\Database\DefaultDatabase\AccountTable\UsernameColumn;
use Taisiya\AuthBundle\Database\DefaultDatabase\UserinfoTable;
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

        $database->createTableIfNotExists(new AccountTable());

        $database->getTable(AccountTable::getName())
            ->createColumnIfNotExists(new IdColumn())
            ->createColumnIfNotExists(new UsernameColumn())
            ->createColumnIfNotExists(new PasswordColumn());

        $database->createTableIfNotExists(new UserinfoTable());

        $database->getTable(UserinfoTable::getName())
            ->createColumnIfNotExists(new UserinfoTable\AccountIdColumn())
            ->createColumnIfNotExists(new UserinfoTable\EmailColumn())
            ->createColumnIfNotExists(new UserinfoTable\FullnameColumn());
    }
}
