<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220316170631 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE user DROP vote_info_id');
        $this->addSql('ALTER TABLE vote ADD user_id INT NOT NULL');
        $this->addSql('ALTER TABLE vote ADD CONSTRAINT FK_5A108564A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_5A108564A76ED395 ON vote (user_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE candidate CHANGE description description LONGTEXT DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE upload upload VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE category CHANGE name name VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE project CHANGE upload_project upload_project VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE upload_picture upload_picture VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE project_name project_name VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE reseaux CHANGE name name VARCHAR(255) DEFAULT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE status CHANGE name name VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE type_de_services CHANGE name name VARCHAR(255) DEFAULT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE user ADD vote_info_id INT NOT NULL, CHANGE email email VARCHAR(180) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE password password VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE first_name first_name VARCHAR(255) DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE last_name last_name VARCHAR(255) DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE nickname nickname VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE city city VARCHAR(255) DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE profile_picture profile_picture VARCHAR(255) DEFAULT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE user_type CHANGE name name VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE vote DROP FOREIGN KEY FK_5A108564A76ED395');
        $this->addSql('DROP INDEX IDX_5A108564A76ED395 ON vote');
        $this->addSql('ALTER TABLE vote DROP user_id');
    }
}
