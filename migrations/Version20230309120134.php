<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230309120134 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE ca_firm_details (id INT AUTO_INCREMENT NOT NULL, user_id_id INT DEFAULT NULL, firm_type VARCHAR(255) DEFAULT NULL, firm_pancard VARCHAR(255) DEFAULT NULL, firm_gst VARCHAR(255) DEFAULT NULL, firm_registration_no VARCHAR(255) DEFAULT NULL, client_id VARCHAR(255) DEFAULT NULL, which_group VARCHAR(255) DEFAULT NULL, referred_by VARCHAR(255) DEFAULT NULL, status SMALLINT NOT NULL, created_at DATETIME DEFAULT NULL, updated_at DATETIME DEFAULT NULL, INDEX IDX_6B92C7FB9D86650F (user_id_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE ca_firm_details ADD CONSTRAINT FK_6B92C7FB9D86650F FOREIGN KEY (user_id_id) REFERENCES user (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE ca_firm_details DROP FOREIGN KEY FK_6B92C7FB9D86650F');
        $this->addSql('DROP TABLE ca_firm_details');
    }
}
