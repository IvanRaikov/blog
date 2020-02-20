<?php

use yii\db\Migration;

/**
 * Class m190923_043351_create_comment
 */
class m190923_043351_create_comment extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('comment', [
            'id'=>$this->primaryKey(),
            'text'=>$this->string(),
            'user_id'=>$this->integer(),
            'article_id'=>$this->integer(),
            'status'=>$this->integer(),
        ]);
        $this->addForeignKey('fk_comment_user', 'comment', 'user_id', 'user', 'id');
        $this->addForeignKey('fk_comment_article', 'comment', 'article_id', 'article', 'id');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('fk_comment_user', 'comment');
        $this->dropForeignKey('fk_comment_article', 'comment');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190923_043351_create_comment cannot be reverted.\n";

        return false;
    }
    */
}
