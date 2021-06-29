<?php

use yii\db\Schema;

class m210628_180101_database_smart_library extends \yii\db\Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE=InnoDB';
        }
        
        $this->createTable('author', [
            'id' => $this->primaryKey(),
            'name' => $this->string(45),
        ], $tableOptions);
        
        $this->createTable('book', [
            'id' => $this->primaryKey(),
            'name' => $this->string(45)->notNull(),
            'description' => $this->text(),
        ], $tableOptions);
        
        $this->createTable('book_author', [
            'id' => $this->primaryKey(),
            'book_id' => $this->integer(11)->notNull(),
            'author_id' => $this->integer(11)->notNull(),
            'FOREIGN KEY ([[author_id]]) REFERENCES author ([[id]])',
            'FOREIGN KEY ([[book_id]]) REFERENCES book ([[id]])',
        ], $tableOptions);
    }

    public function down()
    {
        $this->dropTable('book_author');
        $this->dropTable('book');
        $this->dropTable('author');
    }
}
