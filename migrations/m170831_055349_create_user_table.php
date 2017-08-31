<?php

use yii\db\Migration;

/**
 * Handles the creation of table `user`.
 */
class m170831_055349_create_user_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('user', [
            'id' => $this->primaryKey(),
            'name' =>$this->string(),
            'email'=>$this->string()->notNull()->unique(),
            'passhash' =>$this->string()->notNull(),
            'ststus'=>$this->integer()->defaultValue(1)
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('user');
    }
}
