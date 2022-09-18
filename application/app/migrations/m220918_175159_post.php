<?php

use yii\db\Migration;

/**
 * Class m220918_175159_post
 */
class m220918_175159_post extends Migration
{
    const TABLE_NAME = 'post';

    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable(self::TABLE_NAME, [
            'id' => 'INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY',
            'language_id' => 'INT UNSIGNED NOT NULL',
            'meta_keywords' => 'TEXT',
            'meta_description' => 'TEXT',
            'title' => $this->string(191)->notNull(),
            'text' => 'TEXT NOT NULL',
        ], 'CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE=InnoDB');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m220918_175159_post cannot be reverted.\n";

        return true;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m220918_175159_post cannot be reverted.\n";

        return false;
    }
    */
}
