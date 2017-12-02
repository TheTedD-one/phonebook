<?php

use yii\db\Migration;

/**
 * Class m171202_175309_add_test_data
 */
class m171202_175309_add_test_data extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->insert('person', ['last_name' => 'Зеленов', 'first_name' => 'Владислав']);
        $this->insert('person', ['last_name' => 'Киселёв', 'first_name' => 'Мефодий']);
        $this->insert('person', ['last_name' => 'Кондратьев', 'first_name' => 'Венедикт']);
        $this->insert('person', ['last_name' => 'Кузнецова', 'first_name' => 'Конкордия']);
        $this->insert('person', ['last_name' => 'Никифорова', 'first_name' => 'Анастасия']);
        $this->insert('person', ['last_name' => 'Демьянова', 'first_name' => 'Ирина']);
        $this->insert('person', ['last_name' => 'Григорьев', 'first_name' => 'Семён']);


        $this->insert('phone', ['person_id' => '1', 'number' => '+79177877539', 'type' => 'другой', 'country' => 'Россия']);
        $this->insert('phone', ['person_id' => '1', 'number' => '+79675468131', 'type' => 'рабочий', 'country' => 'Россия']);
        $this->insert('phone', ['person_id' => '2', 'number' => '+79513619467', 'type' => 'мобильный', 'country' => 'Россия']);
        $this->insert('phone', ['person_id' => '3', 'number' => '+79675435682', 'type' => 'мобильный', 'country' => 'Россия']);
        $this->insert('phone', ['person_id' => '3', 'number' => '+79018501970', 'type' => 'мобильный', 'country' => 'Россия']);
        $this->insert('phone', ['person_id' => '4', 'number' => '+77471243259', 'type' => 'мобильный', 'country' => 'Казахстан']);
        $this->insert('phone', ['person_id' => '5', 'number' => '+77018303382', 'type' => 'мобильный', 'country' => 'Казахстан']);
        $this->insert('phone', ['person_id' => '5', 'number' => '+77212512563', 'type' => 'домашний', 'country' => 'Караганда']);
        $this->insert('phone', ['person_id' => '5', 'number' => '+77771237568', 'type' => 'другой', 'country' => 'Казахстан']);
        $this->insert('phone', ['person_id' => '6', 'number' => '+77022406524', 'type' => 'мобильный', 'country' => 'Казахстан']);
        $this->insert('phone', ['person_id' => '6', 'number' => '+77009337160', 'type' => 'рабочий', 'country' => 'Казахстан']);
        $this->insert('phone', ['person_id' => '7', 'number' => '+79754232227', 'type' => 'мобильный', 'country' => 'Россия']);
    }

    public function safeDown()
    {
        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m171202_175309_add_test_data cannot be reverted.\n";

        return false;
    }
    */
}
