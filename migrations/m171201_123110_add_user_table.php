<?php

use yii\db\Migration;

/**
 * Class m171201_123110_add_user_table
 */
class m171201_123110_add_user_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->createTable('user', [
           'id' => $this->primaryKey(),
           'login' => $this->string(),
           'password' => $this->string(),
        ]);

        $this->insert('user', [
            'login' => 'admin',
            'password' => Yii::$app->getSecurity()->generatePasswordHash('admin'),
        ]);
    }

    public function safeDown()
    {
        $this->dropTable('user');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m171201_123110_add_user_table cannot be reverted.\n";

        return false;
    }
    */
}
