<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230309073746 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE user ADD client_type_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE user ADD CONSTRAINT FK_8D93D6499771C8EE FOREIGN KEY (client_type_id) REFERENCES client_type (id)');
        $this->addSql('CREATE INDEX IDX_8D93D6499771C8EE ON user (client_type_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE user DROP FOREIGN KEY FK_8D93D6499771C8EE');
        $this->addSql('DROP INDEX IDX_8D93D6499771C8EE ON user');
        $this->addSql('ALTER TABLE user DROP client_type_id');
    }
}
