<?php

use yii\db\Schema;

class m210629_180101_dummy_entries extends \yii\db\Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE=InnoDB';
        }
        
        $this->batchInsert('author',['name'],[
            ['Andrew Bogdanov'], 
            ['Dmitry Eliseev'], 
            ['Alexander Makarov']
        ]);

        $this->batchInsert('book',['name', 'description'],[
            ['Yii 1.1 Cookbook','Yii 1.1 Application Development Cookbook'],
            ['Yii2 Cookbook','Yii2 Application Development Cookbook'],
        ]);

        $this->batchInsert('book_author',['book_id', 'author_id'],[
            [1,3],
            [2,1],
            [2,2],
            [2,3],
        ]);
    }

    public function down()
    {
        $this->execute('SET foreign_key_checks = 0;');
        $this->truncateTable('book');
        $this->truncateTable('book_author');
        $this->truncateTable('author');
        $this->execute('SET foreign_key_checks = 1;');
    }
}
