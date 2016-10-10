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

        $accountTable = $database->hasTable(AccountTable::NAME)
            ? $database->getTable(AccountTable::NAME)
            : $database
                ->addTable(TableFactory::create(AccountTable::class))
                ->getTable(AccountTable::NAME);

        $idColumn = $accountTable->hasColumn(AccountTable\IdColumn::NAME)
            ? $accountTable->getColumn(AccountTable\IdColumn::NAME)
            : $accountTable
                ->addColumn(ColumnFactory::create(AccountTable\IdColumn::class))
                ->getColumn(AccountTable\IdColumn::NAME);

        $idColumn->setAutoIncrement(true);

        
    }
}
