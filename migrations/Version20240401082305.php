<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240401082305 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SEQUENCE aftersales_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE TABLE aftersales (id INT NOT NULL, ord_id INT NOT NULL, sn VARCHAR(255) NOT NULL, type SMALLINT NOT NULL, reason VARCHAR(255) DEFAULT NULL, amount NUMERIC(10, 2) NOT NULL, images TEXT DEFAULT NULL, comment VARCHAR(255) DEFAULT NULL, status SMALLINT NOT NULL, created_at TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL, updated_at TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL, deleted BOOLEAN NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE INDEX IDX_E80B28ADE636D3F5 ON aftersales (ord_id)');
        $this->addSql('COMMENT ON COLUMN aftersales.images IS \'(DC2Type:simple_array)\'');
        $this->addSql('COMMENT ON COLUMN aftersales.created_at IS \'(DC2Type:datetime_immutable)\'');
        $this->addSql('COMMENT ON COLUMN aftersales.updated_at IS \'(DC2Type:datetime_immutable)\'');
        $this->addSql('ALTER TABLE aftersales ADD CONSTRAINT FK_E80B28ADE636D3F5 FOREIGN KEY (ord_id) REFERENCES "order" (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('DROP SEQUENCE aftersales_id_seq CASCADE');
        $this->addSql('ALTER TABLE aftersales DROP CONSTRAINT FK_E80B28ADE636D3F5');
        $this->addSql('DROP TABLE aftersales');
    }
}
