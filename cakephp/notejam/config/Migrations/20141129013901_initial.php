<?php

use Phinx\Migration\AbstractMigration;

class Initial extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-change-method
     */
    public function change()
    {
        $table = $this->table('users');
        $table->addColumn('email', 'string', ['limit' => 75])
              ->addColumn('password', 'string', ['limit' => 128])
              ->create();

        $table = $this->table('pads');
        $table->addColumn('name', 'string', ['limit' => 100])
              ->addColumn('user_id', 'integer')
              ->create();

        $table = $this->table('notes');
        $table->addColumn('pad_id', 'integer')
              ->addColumn('user_id', 'integer')
              ->addColumn('name', 'string', ['limit' =>  100])
              ->addColumn('text', 'text')
              ->addColumn('created_at', 'datetime')
              ->addColumn('updated_at', 'datetime')
              ->create();
    }


    /**
     * Migrate Up.
     */
    public function up()
    {

    }

    /**
     * Migrate Down.
     */
    public function down()
    {

    }
}
