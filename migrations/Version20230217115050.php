<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230217115050 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE subscriptions (id INT AUTO_INCREMENT NOT NULL, plan_title VARCHAR(255) NOT NULL, time INT NOT NULL, month_day VARCHAR(255) NOT NULL, no_of_clients INT NOT NULL, no_of_clients_login INT NOT NULL, no_of_employee INT NOT NULL, no_of_transaction INT NOT NULL, storage_size INT NOT NULL, price INT NOT NULL, display_on_portal VARCHAR(255) NOT NULL, task_manager VARCHAR(255) NOT NULL, file_manager VARCHAR(255) NOT NULL, client_login_app VARCHAR(255) NOT NULL, e_commerce VARCHAR(255) NOT NULL, template_customization VARCHAR(255) NOT NULL, live_report_client_mobile_app VARCHAR(255) NOT NULL, status TINYINT(1) NOT NULL, created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', updated_at DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\', deleted_at DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\', PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE subscriptions');
    }
}
