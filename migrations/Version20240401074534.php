<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240401074534 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SEQUENCE "order_id_seq" INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE TABLE "order" (id INT NOT NULL, sn VARCHAR(255) NOT NULL, status SMALLINT NOT NULL, aftersale_status SMALLINT NOT NULL, consignee VARCHAR(255) NOT NULL, mobile VARCHAR(255) NOT NULL, address VARCHAR(255) NOT NULL, message VARCHAR(255) DEFAULT NULL, goods_price NUMERIC(10, 2) NOT NULL, freight_price NUMERIC(10, 2) NOT NULL, coupon_price NUMERIC(10, 2) NOT NULL, integral_price NUMERIC(10, 2) NOT NULL, groupon_price NUMERIC(10, 2) NOT NULL, order_price NUMERIC(10, 2) NOT NULL, actual_price NUMERIC(10, 2) NOT NULL, pay_id INT DEFAULT NULL, pay_time VARCHAR(255) DEFAULT NULL, ship_sn VARCHAR(255) DEFAULT NULL, ship_channel VARCHAR(255) DEFAULT NULL, ship_time TIMESTAMP(0) WITHOUT TIME ZONE DEFAULT NULL, refund_amount NUMERIC(10, 2) DEFAULT NULL, refund_type VARCHAR(255) DEFAULT NULL, refund_content VARCHAR(255) DEFAULT NULL, refund_time TIMESTAMP(0) WITHOUT TIME ZONE DEFAULT NULL, confirm_time TIMESTAMP(0) WITHOUT TIME ZONE DEFAULT NULL, comments SMALLINT NOT NULL, end_time TIMESTAMP(0) WITHOUT TIME ZONE DEFAULT NULL, created_at TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL, updated_at TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL, deleted BOOLEAN NOT NULL, paid_at TIMESTAMP(0) WITHOUT TIME ZONE DEFAULT NULL, shipped_at TIMESTAMP(0) WITHOUT TIME ZONE DEFAULT NULL, refunded_at TIMESTAMP(0) WITHOUT TIME ZONE DEFAULT NULL, confirmed_at TIMESTAMP(0) WITHOUT TIME ZONE DEFAULT NULL, ended_at TIMESTAMP(0) WITHOUT TIME ZONE DEFAULT NULL, PRIMARY KEY(id))');
        $this->addSql('COMMENT ON COLUMN "order".ship_time IS \'(DC2Type:datetime_immutable)\'');
        $this->addSql('COMMENT ON COLUMN "order".refund_time IS \'(DC2Type:datetime_immutable)\'');
        $this->addSql('COMMENT ON COLUMN "order".confirm_time IS \'(DC2Type:datetime_immutable)\'');
        $this->addSql('COMMENT ON COLUMN "order".end_time IS \'(DC2Type:datetime_immutable)\'');
        $this->addSql('COMMENT ON COLUMN "order".created_at IS \'(DC2Type:datetime_immutable)\'');
        $this->addSql('COMMENT ON COLUMN "order".updated_at IS \'(DC2Type:datetime_immutable)\'');
        $this->addSql('COMMENT ON COLUMN "order".paid_at IS \'(DC2Type:datetime_immutable)\'');
        $this->addSql('COMMENT ON COLUMN "order".shipped_at IS \'(DC2Type:datetime_immutable)\'');
        $this->addSql('COMMENT ON COLUMN "order".refunded_at IS \'(DC2Type:datetime_immutable)\'');
        $this->addSql('COMMENT ON COLUMN "order".confirmed_at IS \'(DC2Type:datetime_immutable)\'');
        $this->addSql('COMMENT ON COLUMN "order".ended_at IS \'(DC2Type:datetime_immutable)\'');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('DROP SEQUENCE "order_id_seq" CASCADE');
        $this->addSql('DROP TABLE "order"');
    }
}
