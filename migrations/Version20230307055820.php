<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230307055820 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE promo_codes (id INT AUTO_INCREMENT NOT NULL, promo_name VARCHAR(255) NOT NULL, promo_description LONGTEXT DEFAULT NULL, promo_type VARCHAR(255) NOT NULL, discount_amount VARCHAR(255) NOT NULL, maximum_discount_amount VARCHAR(255) NOT NULL, maximum_order_value VARCHAR(255) NOT NULL, start_date DATETIME NOT NULL, end_date DATETIME NOT NULL, user_type VARCHAR(255) NOT NULL, user_category INT NOT NULL, life_of_code INT NOT NULL, use_per_user INT NOT NULL, terms_condition LONGTEXT DEFAULT NULL, display_on_portal VARCHAR(255) NOT NULL, status SMALLINT NOT NULL, created_at DATETIME DEFAULT NULL, updated_at DATETIME DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE promo_codes');
    }
}
