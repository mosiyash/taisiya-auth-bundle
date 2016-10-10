<?php

namespace Taisiya\AuthBundle\Composer\Event;

use Composer\EventDispatcher\Event;
use Taisiya\AuthBundle\Database\AccountTable;
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

        $idColumn = $accountTable
            ->addColumnIfNotExists(ColumnFactory::create(AccountTable\IdColumn::class))
            ->getColumn(AccountTable\IdColumn::NAME)
            ->setAutoIncrement(true);

        $usernameColumn = $accountTable
            ->addColumnIfNotExists(ColumnFactory::create(AccountTable\UsernameColumn::class))
            ->getColumn(AccountTable\UsernameColumn::NAME);

        $passwordColumn = $accountTable
            ->addColumnIfNotExists(ColumnFactory::create(AccountTable\PasswordColumn::class))
            ->getColumn(AccountTable\PasswordColumn::NAME);
    }
}
