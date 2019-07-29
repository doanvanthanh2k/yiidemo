<?php

use yii\db\Migration;

/**
 * Class m190725_034953_experiences
 */
class m190725_034953_experiences extends Migration
{
     public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%experiences}}', [
            'id' => $this->primaryKey(),
            'user_id' =>  $this->integer()->notNull(),
            'started_date' => $this->date()->notNull(),
            'finished_date' => $this->date()->notNull(),
            'company' => $this->string(100)->notNull(),
            'description' => $this->string(255)->notNull(),
            
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),
        ], $tableOptions);

         $this->createIndex(
            'idx-experiences-user_id',
            'experiences',
            'user_id'
        );

        $this->addForeignKey(
            'fk-experiences-user_id',
            'experiences',
            'user_id',
            'user',
            'id',
            'CASCADE'
        ); 
    }

    public function down()
    {
         $this->dropIndex(
            'idx-experiences-user_id',
            'experiences'
        );

         $this->dropForeignKey(
            'fk-experiences-user_id',
            'experiences'
        );
         
        $this->dropTable('{{%experiences}}');
    }
}
