<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230309124346 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE ca_subscription_addons (id INT AUTO_INCREMENT NOT NULL, user_id_id INT DEFAULT NULL, ca_subscription_id_id INT DEFAULT NULL, addons_id_id INT DEFAULT NULL, addon_type INT DEFAULT NULL, addon_title VARCHAR(255) DEFAULT NULL, addon_type_json LONGTEXT DEFAULT NULL, time INT DEFAULT NULL, month_day VARCHAR(255) DEFAULT NULL, price DOUBLE PRECISION DEFAULT NULL, start_date DATE DEFAULT NULL, end_date DATE DEFAULT NULL, qty INT DEFAULT NULL, total_price INT DEFAULT NULL, status SMALLINT NOT NULL, created_at DATETIME DEFAULT NULL, updated_at DATETIME DEFAULT NULL, INDEX IDX_4E49CADE9D86650F (user_id_id), INDEX IDX_4E49CADEECE2F59F (ca_subscription_id_id), INDEX IDX_4E49CADE2FA6429A (addons_id_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE ca_subscription_addons ADD CONSTRAINT FK_4E49CADE9D86650F FOREIGN KEY (user_id_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE ca_subscription_addons ADD CONSTRAINT FK_4E49CADEECE2F59F FOREIGN KEY (ca_subscription_id_id) REFERENCES ca_subscription (id)');
        $this->addSql('ALTER TABLE ca_subscription_addons ADD CONSTRAINT FK_4E49CADE2FA6429A FOREIGN KEY (addons_id_id) REFERENCES addons (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE ca_subscription_addons DROP FOREIGN KEY FK_4E49CADE9D86650F');
        $this->addSql('ALTER TABLE ca_subscription_addons DROP FOREIGN KEY FK_4E49CADEECE2F59F');
        $this->addSql('ALTER TABLE ca_subscription_addons DROP FOREIGN KEY FK_4E49CADE2FA6429A');
        $this->addSql('DROP TABLE ca_subscription_addons');
    }
}
