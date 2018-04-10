<?php

use yii\db\Migration;

/**
 * Class m180410_173623_post
 */
class m180410_173623_post extends Migration
{
    /**
     * @var string
     */
    private $tableName = '{{%post}}';

    /**
     *
     */
    public function up()
    {
        $this->createTable($this->tableName, [
            'id' => $this->primaryKey(),
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
