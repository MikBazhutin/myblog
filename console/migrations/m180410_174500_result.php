<?php

use yii\db\Migration;

/**
 * Class m180410_174500_result
 */
class m180410_174500_result extends Migration
{
    /**
     * @var string
     */
    private $tableName = '{{%result}}';

    /**
     *
     */
    public function up()
    {
        $this->createTable($this->tableName, [
            'id' => $this->primaryKey(),
            'post_id' => $this->integer()->null(),
            'image' => $this->string()->notNull(),
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),
        ]);
    }

    /**
     *
     */
    public function down()
    {
        $this->dropTable($this->tableName);
    }
}
