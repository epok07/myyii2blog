<?php

use yii\db\Migration;

/**
 * Handles the creation of table `post`.
 */
class m170117_105838_create_post_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('post', [
            'id' => $this->primaryKey(),
            'title' => $this->string(128)->notNull()->unique(),
            'slug' => $this->string(128)->notNull()->unique(),
            'lead_photo' => $this->string(128),
            'lead_text' => $this->text(),
            'content' => $this->text()->notNull(),
            'meta_description' => $this->string(160),
            'created_at' => $this->datetime()->notNull(),
            'updated_at' => $this->datetime(),
            'created_by' => $this->integer()->notNull(),
            'updated_by' => $this->integer(),
            'category_id' => $this->integer()->notNull()
        ]);

        $this->createIndex('post_index', 'post', ['created_by', 'updated_by']);
        $this->addForeignKey('fk_post_category', 'post', 'category_id', 'category', 'id', 'CASCADE', 'CASCADE');
        $this->addForeignKey('fk_post_user_created_by', 'post', 'created_by', 'user', 'id', 'CASCADE', 'CASCADE');
        $this->addForeignKey('fk_post_user_updated_by', 'post', 'updated_by', 'user', 'id', 'CASCADE', 'CASCADE');
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropForeignKey('fk_post_category', 'post');
        $this->dropForeignKey('fk_post_user_created_by', 'post');
        $this->dropForeignKey('fk_post_user_updated_by', 'post');
        $this->dropTable('post');
    }
}
