<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230309123500 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE ca_subscription (id INT AUTO_INCREMENT NOT NULL, user_id_id INT DEFAULT NULL, subscription_id_id INT DEFAULT NULL, subscription_title VARCHAR(255) DEFAULT NULL, time INT DEFAULT NULL, month_day VARCHAR(255) DEFAULT NULL, no_of_clients INT DEFAULT NULL, no_of_client_login INT DEFAULT NULL, no_of_employee INT DEFAULT NULL, no_of_transaction INT DEFAULT NULL, storage_size INT DEFAULT NULL, price DOUBLE PRECISION DEFAULT NULL, task_manager TINYINT(1) DEFAULT NULL, file_manager TINYINT(1) DEFAULT NULL, client_login_app TINYINT(1) DEFAULT NULL, e_commerce TINYINT(1) DEFAULT NULL, template_customization TINYINT(1) DEFAULT NULL, live_report_client_mobile_app TINYINT(1) DEFAULT NULL, is_addons TINYINT(1) DEFAULT NULL, start_date DATE DEFAULT NULL, end_date DATE DEFAULT NULL, is_promo_apply TINYINT(1) DEFAULT NULL, promo_code VARCHAR(255) DEFAULT NULL, promo_discount DOUBLE PRECISION DEFAULT NULL, admin_discount DOUBLE PRECISION DEFAULT NULL, tax_amount DOUBLE PRECISION DEFAULT NULL, round_off_amount DOUBLE PRECISION DEFAULT NULL, invoice_amount DOUBLE PRECISION DEFAULT NULL, payment_terms VARCHAR(255) DEFAULT NULL, credit_period INT NOT NULL, credit_period_day_month VARCHAR(255) DEFAULT NULL, payment_mode VARCHAR(255) DEFAULT NULL, subscription_status TINYINT(1) DEFAULT NULL, created_at DATETIME DEFAULT NULL, updated_at DATETIME DEFAULT NULL, INDEX IDX_63AB02DA9D86650F (user_id_id), INDEX IDX_63AB02DA857C9F24 (subscription_id_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE ca_subscription ADD CONSTRAINT FK_63AB02DA9D86650F FOREIGN KEY (user_id_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE ca_subscription ADD CONSTRAINT FK_63AB02DA857C9F24 FOREIGN KEY (subscription_id_id) REFERENCES subscriptions (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE ca_subscription DROP FOREIGN KEY FK_63AB02DA9D86650F');
        $this->addSql('ALTER TABLE ca_subscription DROP FOREIGN KEY FK_63AB02DA857C9F24');
        $this->addSql('DROP TABLE ca_subscription');
    }
}
