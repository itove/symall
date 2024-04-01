<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240401081306 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SEQUENCE groupon_rule_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE TABLE groupon_rule (id INT NOT NULL, goods_id INT NOT NULL, image VARCHAR(255) DEFAULT NULL, discount NUMERIC(10, 2) NOT NULL, users_min INT NOT NULL, expire_at TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL, status SMALLINT NOT NULL, created_at TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL, updated_at TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL, deleted BOOLEAN NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE INDEX IDX_250699C1B7683595 ON groupon_rule (goods_id)');
        $this->addSql('COMMENT ON COLUMN groupon_rule.expire_at IS \'(DC2Type:datetime_immutable)\'');
        $this->addSql('COMMENT ON COLUMN groupon_rule.created_at IS \'(DC2Type:datetime_immutable)\'');
        $this->addSql('COMMENT ON COLUMN groupon_rule.updated_at IS \'(DC2Type:datetime_immutable)\'');
        $this->addSql('ALTER TABLE groupon_rule ADD CONSTRAINT FK_250699C1B7683595 FOREIGN KEY (goods_id) REFERENCES goods (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('DROP SEQUENCE groupon_rule_id_seq CASCADE');
        $this->addSql('ALTER TABLE groupon_rule DROP CONSTRAINT FK_250699C1B7683595');
        $this->addSql('DROP TABLE groupon_rule');
    }
}
