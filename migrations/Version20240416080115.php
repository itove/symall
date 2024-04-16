<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240416080115 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SEQUENCE user_coupon_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE TABLE user_coupon (id INT NOT NULL, customer_id INT NOT NULL, coupon_id INT NOT NULL, ord_id INT DEFAULT NULL, status SMALLINT NOT NULL, used_at TIMESTAMP(0) WITHOUT TIME ZONE DEFAULT NULL, created_at TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL, updated_at TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL, deleted BOOLEAN NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE INDEX IDX_1ED243F9395C3F3 ON user_coupon (customer_id)');
        $this->addSql('CREATE INDEX IDX_1ED243F66C5951B ON user_coupon (coupon_id)');
        $this->addSql('CREATE INDEX IDX_1ED243FE636D3F5 ON user_coupon (ord_id)');
        $this->addSql('COMMENT ON COLUMN user_coupon.used_at IS \'(DC2Type:datetime_immutable)\'');
        $this->addSql('COMMENT ON COLUMN user_coupon.created_at IS \'(DC2Type:datetime_immutable)\'');
        $this->addSql('COMMENT ON COLUMN user_coupon.updated_at IS \'(DC2Type:datetime_immutable)\'');
        $this->addSql('ALTER TABLE user_coupon ADD CONSTRAINT FK_1ED243F9395C3F3 FOREIGN KEY (customer_id) REFERENCES "user" (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE user_coupon ADD CONSTRAINT FK_1ED243F66C5951B FOREIGN KEY (coupon_id) REFERENCES coupon (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE user_coupon ADD CONSTRAINT FK_1ED243FE636D3F5 FOREIGN KEY (ord_id) REFERENCES "order" (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('DROP SEQUENCE user_coupon_id_seq CASCADE');
        $this->addSql('ALTER TABLE user_coupon DROP CONSTRAINT FK_1ED243F9395C3F3');
        $this->addSql('ALTER TABLE user_coupon DROP CONSTRAINT FK_1ED243F66C5951B');
        $this->addSql('ALTER TABLE user_coupon DROP CONSTRAINT FK_1ED243FE636D3F5');
        $this->addSql('DROP TABLE user_coupon');
    }
}
