<?php

use yii\db\Migration;

/**
 * Class m190923_043420_create_article_tag
 */
class m190923_043420_create_article_tag extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('article_tag', [
            'article_id'=>$this->integer(),
            'tag_id'=>$this->integer()
        ]);
        $this->addForeignKey('fk_article_tag_article', 'article_tag', 'article_id', 'article', 'id');
        $this->addForeignKey('fk_article_tag_tag', 'article_tag', 'tag_id', 'tag', 'id');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('fk_article_tag_article', "article_tag");
        $this->dropForeignKey('fk_article_tag_tag', "article_tag");

    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190923_043420_create_article_tag cannot be reverted.\n";

        return false;
    }
    */
}
