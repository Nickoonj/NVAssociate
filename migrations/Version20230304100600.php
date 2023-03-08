<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230304100600 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE addons (id INT AUTO_INCREMENT NOT NULL, add_on_type_id INT DEFAULT NULL, add_on_title VARCHAR(255) NOT NULL, add_on_type_json VARCHAR(2500) DEFAULT NULL, time INT DEFAULT NULL, month_day VARCHAR(255) DEFAULT NULL, price INT NOT NULL, status SMALLINT NOT NULL, created_at DATETIME DEFAULT NULL, updated_at DATETIME DEFAULT NULL, INDEX IDX_DB652637AE5A6E89 (add_on_type_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE addons ADD CONSTRAINT FK_DB652637AE5A6E89 FOREIGN KEY (add_on_type_id) REFERENCES addons_type (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE addons DROP FOREIGN KEY FK_DB652637AE5A6E89');
        $this->addSql('DROP TABLE addons');
    }
}
