<?php

use yii\db\Migration;

/**
 * Class m171130_091938_add_phone_table
 */
class m171130_091938_add_phone_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->createTable('phone', [
            'id' => $this->primaryKey(),
            'person_id' => $this->integer()->notNull(),
            'number' => $this->string()->notNull(),
            'type' => "enum('мобильный', 'домашний', 'рабочий', 'другой') NOT NULL DEFAULT 'другой'",
            'country' => $this->string(),
        ]);

        $this->addForeignKey(
            "fk_person_id",
            "phone",
            "person_id",
            "person",
            "id",
            'CASCADE'
        );
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        $this->dropForeignKey('fk_person_id', 'phone');
        $this->dropTable('phone');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m171130_091938_add_phone_table cannot be reverted.\n";

        return false;
    }
    */
}
