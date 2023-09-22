<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230815093937 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE todo (id INT AUTO_INCREMENT NOT NULL, task_user_id INT DEFAULT NULL, item_id INT DEFAULT NULL, etat_id INT DEFAULT NULL, libelle VARCHAR(200) NOT NULL, content LONGTEXT DEFAULT NULL, created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', updated_at DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\', start_at DATETIME DEFAULT NULL, end_at DATETIME DEFAULT NULL, allday TINYINT(1) DEFAULT NULL, INDEX IDX_5A0EB6A0B88FF97F (task_user_id), INDEX IDX_5A0EB6A0126F525E (item_id), INDEX IDX_5A0EB6A0D5E86FF (etat_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE todo_categorie (id INT AUTO_INCREMENT NOT NULL, libelle VARCHAR(200) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE todo_etat (id INT AUTO_INCREMENT NOT NULL, libelle VARCHAR(150) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE todo_illustration (id INT AUTO_INCREMENT NOT NULL, todo_id INT DEFAULT NULL, todo_task_id INT DEFAULT NULL, file VARCHAR(255) NOT NULL, INDEX IDX_F8A7578AEA1EBC33 (todo_id), INDEX IDX_F8A7578A58BFCBF7 (todo_task_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE todo_item (id INT AUTO_INCREMENT NOT NULL, topics_id INT DEFAULT NULL, libelle VARCHAR(200) NOT NULL, INDEX IDX_40CA4301BF06A414 (topics_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE todo_task (id INT AUTO_INCREMENT NOT NULL, todo_id INT DEFAULT NULL, libelle VARCHAR(200) NOT NULL, content LONGTEXT DEFAULT NULL, INDEX IDX_DAFBD3AEA1EBC33 (todo_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE todo_topic (id INT AUTO_INCREMENT NOT NULL, categories_id INT DEFAULT NULL, libelle VARCHAR(200) NOT NULL, INDEX IDX_10170288A21214B7 (categories_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(180) NOT NULL, roles LONGTEXT NOT NULL COMMENT \'(DC2Type:json)\', password VARCHAR(255) NOT NULL, is_verified TINYINT(1) NOT NULL, UNIQUE INDEX UNIQ_8D93D649E7927C74 (email), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user_profil (id INT AUTO_INCREMENT NOT NULL, user_id INT DEFAULT NULL, genre VARCHAR(150) NOT NULL, nom VARCHAR(150) NOT NULL, prenom VARCHAR(150) NOT NULL, avatar VARCHAR(255) DEFAULT NULL, naissance_at DATE DEFAULT NULL, UNIQUE INDEX UNIQ_8384A9AAA76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE messenger_messages (id BIGINT AUTO_INCREMENT NOT NULL, body LONGTEXT NOT NULL, headers LONGTEXT NOT NULL, queue_name VARCHAR(190) NOT NULL, created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', available_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', delivered_at DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\', INDEX IDX_75EA56E0FB7336F0 (queue_name), INDEX IDX_75EA56E0E3BD61CE (available_at), INDEX IDX_75EA56E016BA31DB (delivered_at), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE todo ADD CONSTRAINT FK_5A0EB6A0B88FF97F FOREIGN KEY (task_user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE todo ADD CONSTRAINT FK_5A0EB6A0126F525E FOREIGN KEY (item_id) REFERENCES todo_item (id)');
        $this->addSql('ALTER TABLE todo ADD CONSTRAINT FK_5A0EB6A0D5E86FF FOREIGN KEY (etat_id) REFERENCES todo_etat (id)');
        $this->addSql('ALTER TABLE todo_illustration ADD CONSTRAINT FK_F8A7578AEA1EBC33 FOREIGN KEY (todo_id) REFERENCES todo (id)');
        $this->addSql('ALTER TABLE todo_illustration ADD CONSTRAINT FK_F8A7578A58BFCBF7 FOREIGN KEY (todo_task_id) REFERENCES todo_task (id)');
        $this->addSql('ALTER TABLE todo_item ADD CONSTRAINT FK_40CA4301BF06A414 FOREIGN KEY (topics_id) REFERENCES todo_topic (id)');
        $this->addSql('ALTER TABLE todo_task ADD CONSTRAINT FK_DAFBD3AEA1EBC33 FOREIGN KEY (todo_id) REFERENCES todo (id)');
        $this->addSql('ALTER TABLE todo_topic ADD CONSTRAINT FK_10170288A21214B7 FOREIGN KEY (categories_id) REFERENCES todo_categorie (id)');
        $this->addSql('ALTER TABLE user_profil ADD CONSTRAINT FK_8384A9AAA76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE todo DROP FOREIGN KEY FK_5A0EB6A0B88FF97F');
        $this->addSql('ALTER TABLE todo DROP FOREIGN KEY FK_5A0EB6A0126F525E');
        $this->addSql('ALTER TABLE todo DROP FOREIGN KEY FK_5A0EB6A0D5E86FF');
        $this->addSql('ALTER TABLE todo_illustration DROP FOREIGN KEY FK_F8A7578AEA1EBC33');
        $this->addSql('ALTER TABLE todo_illustration DROP FOREIGN KEY FK_F8A7578A58BFCBF7');
        $this->addSql('ALTER TABLE todo_item DROP FOREIGN KEY FK_40CA4301BF06A414');
        $this->addSql('ALTER TABLE todo_task DROP FOREIGN KEY FK_DAFBD3AEA1EBC33');
        $this->addSql('ALTER TABLE todo_topic DROP FOREIGN KEY FK_10170288A21214B7');
        $this->addSql('ALTER TABLE user_profil DROP FOREIGN KEY FK_8384A9AAA76ED395');
        $this->addSql('DROP TABLE todo');
        $this->addSql('DROP TABLE todo_categorie');
        $this->addSql('DROP TABLE todo_etat');
        $this->addSql('DROP TABLE todo_illustration');
        $this->addSql('DROP TABLE todo_item');
        $this->addSql('DROP TABLE todo_task');
        $this->addSql('DROP TABLE todo_topic');
        $this->addSql('DROP TABLE user');
        $this->addSql('DROP TABLE user_profil');
        $this->addSql('DROP TABLE messenger_messages');
    }
}
