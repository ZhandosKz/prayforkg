<?php

use yii\db\Migration;

/**
 * Class m220918_174705_language
 */
class m220918_174705_language extends Migration
{
    const TABLE_NAME = 'language';

    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable(self::TABLE_NAME, [
            'id' => 'INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY',
            'slug' => $this->string(191)->notNull(),
            'locale' => $this->string(191)->notNull()->unique(),
        ], 'CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE=InnoDB');

        $this->insert(self::TABLE_NAME, [
            'slug' => 'kg',
            'locale' => 'ky-KG',
        ]);


        $this->insert(self::TABLE_NAME, [
            'slug' => 'ru',
            'locale' => 'ru-RU',
        ]);


        $this->insert(self::TABLE_NAME, [
            'slug' => 'eng',
            'locale' => 'en-US',
        ]);


    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m220918_174705_language cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m220918_174705_language cannot be reverted.\n";

        return false;
    }
    */
}
