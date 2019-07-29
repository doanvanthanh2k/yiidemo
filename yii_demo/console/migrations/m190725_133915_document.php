<?php

use yii\db\Migration;

/**
 * Class m190725_133915_document
 */
class m190725_133915_document extends Migration
{
   public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%document}}', [
            'id' => $this->primaryKey(),
            'user_id' =>  $this->integer()->notNull(),
            'document' => $this->text()->notNull(),
            'description' => $this->string(255),
            
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),
        ], $tableOptions);
        $this->createIndex(
            'idx-document-user_id',
            'document',
            'user_id'
        );

        $this->addForeignKey(
            'fk-document-user_id',
            'document',
            'user_id',
            'user',
            'id',
            'CASCADE'
        ); 
    }

    public function down()
    {
        $this->dropIndex(
            'idx-document-user_id',
            'document'
        );

         $this->dropForeignKey(
            'fk-document-user_id',
            'document'
        );

        $this->dropTable('{{%document}}');
    }
}
