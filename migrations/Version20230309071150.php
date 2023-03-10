<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230309071150 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE user ADD username VARCHAR(255) DEFAULT NULL, ADD first_name VARCHAR(255) NOT NULL, ADD middle_name VARCHAR(255) DEFAULT NULL, ADD last_name VARCHAR(255) DEFAULT NULL, ADD mobile VARCHAR(15) DEFAULT NULL, ADD address VARCHAR(255) DEFAULT NULL, ADD pincode VARCHAR(20) DEFAULT NULL, ADD profile_img VARCHAR(255) DEFAULT NULL, ADD client_type SMALLINT DEFAULT NULL, ADD status SMALLINT NOT NULL, ADD created_at DATETIME DEFAULT NULL, ADD updated_at DATETIME DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE user DROP username, DROP first_name, DROP middle_name, DROP last_name, DROP mobile, DROP address, DROP pincode, DROP profile_img, DROP client_type, DROP status, DROP created_at, DROP updated_at');
    }
}
