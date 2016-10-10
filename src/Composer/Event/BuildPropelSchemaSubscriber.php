<?php

namespace Taisiya\AuthBundle\Composer\Event;

use Composer\EventDispatcher\Event;
use Taisiya\AuthBundle\Database\AccountTable;
use Taisiya\AuthBundle\Database\UserinfoTable;
use Taisiya\PropelBundle\Composer\Event\AbstractBuildPropelSchemaSubscriber;
use Taisiya\PropelBundle\Database\ColumnFactory;
use Taisiya\PropelBundle\Database\DefaultDatabase;
use Taisiya\PropelBundle\Database\Schema;
use Taisiya\PropelBundle\Database\TableFactory;

class BuildPropelSchemaSubscriber extends AbstractBuildPropelSchemaSubscriber
{
    public function buildPropelSchema(Event $event): void
    {
        /** @var Schema $schema */
        $schema = $event->getArguments()['schema'];

        $database = $schema->getDatabase(DefaultDatabase::NAME);

        $accountTable = $database
            ->addTableIfNotExists(TableFactory::create(AccountTable::class))
            ->getTable(AccountTable::NAME);

        $accountTable
            ->addColumnIfNotExists(ColumnFactory::create(AccountTable\IdColumn::class))
            ->getColumn(AccountTable\IdColumn::NAME)
            ->setAutoIncrement(true);

        $accountTable
            ->addColumnIfNotExists(ColumnFactory::create(AccountTable\UsernameColumn::class))
            ->getColumn(AccountTable\UsernameColumn::NAME);

        $accountTable
            ->addColumnIfNotExists(ColumnFactory::create(AccountTable\PasswordColumn::class))
            ->getColumn(AccountTable\PasswordColumn::NAME);

        $userinfoTable = $database
            ->addTableIfNotExists(TableFactory::create(UserinfoTable::class))
            ->getTable(UserinfoTable::NAME);

        $userinfoTable
            ->addColumnIfNotExists(ColumnFactory::create(UserinfoTable\AccountIdColumn::class))
            ->getColumn(UserinfoTable\AccountIdColumn::NAME);

        $userinfoTable
            ->addColumnIfNotExists(ColumnFactory::create(UserinfoTable\EmailColumn::class))
            ->getColumn(UserinfoTable\EmailColumn::NAME);

        $userinfoTable
            ->addColumnIfNotExists(ColumnFactory::create(UserinfoTable\FullnameColumn::class))
            ->getColumn(UserinfoTable\FullnameColumn::NAME);
    }
}
