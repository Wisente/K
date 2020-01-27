<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%favorite_user}}`.
 */
class m200127_112424_create_favorite_user_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%favorite_user}}', [
            'id' => $this->primaryKey(),
            'id_user' => $this->integer(),
            'id_article' => $this->integer(),
        ]);
	
	$this->addForeignKey(
            'fk_user_fu',
            'favorite_user',
            'id_user',
            'user',
            'id',
            'CASCADE');

        $this->addForeignKey(
            'fk_drug_fu',
            'favorite_user',
            'id_article',
            'article',
            'id',
            'CASCADE');


    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%favorite_user}}');
    }
}
