<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230309120753 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE ca_owner_details (id INT AUTO_INCREMENT NOT NULL, user_id_id INT DEFAULT NULL, ca_middle_name VARCHAR(255) DEFAULT NULL, ca_last_name VARCHAR(255) DEFAULT NULL, ca_gender VARCHAR(255) DEFAULT NULL, ca_birth_date DATE DEFAULT NULL, ca_membership_no VARCHAR(255) DEFAULT NULL, ca_email_id INT DEFAULT NULL, ca_emailid VARCHAR(255) DEFAULT NULL, ca_mobile VARCHAR(15) DEFAULT NULL, ca_alt_mobile VARCHAR(15) DEFAULT NULL, ca_user_img VARCHAR(255) DEFAULT NULL, status SMALLINT NOT NULL, created_at DATETIME DEFAULT NULL, updated_at DATETIME DEFAULT NULL, INDEX IDX_874C58979D86650F (user_id_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE ca_owner_details ADD CONSTRAINT FK_874C58979D86650F FOREIGN KEY (user_id_id) REFERENCES user (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE ca_owner_details DROP FOREIGN KEY FK_874C58979D86650F');
        $this->addSql('DROP TABLE ca_owner_details');
    }
}
