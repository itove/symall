<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240401025111 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SEQUENCE spec_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE TABLE spec (id INT NOT NULL, goods_id INT NOT NULL, spec VARCHAR(255) NOT NULL, value VARCHAR(255) NOT NULL, pic_url VARCHAR(255) DEFAULT NULL, created_at TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL, updated_at TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL, deleted BOOLEAN NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE INDEX IDX_C00E173EB7683595 ON spec (goods_id)');
        $this->addSql('COMMENT ON COLUMN spec.created_at IS \'(DC2Type:datetime_immutable)\'');
        $this->addSql('COMMENT ON COLUMN spec.updated_at IS \'(DC2Type:datetime_immutable)\'');
        $this->addSql('ALTER TABLE spec ADD CONSTRAINT FK_C00E173EB7683595 FOREIGN KEY (goods_id) REFERENCES goods (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('DROP SEQUENCE spec_id_seq CASCADE');
        $this->addSql('ALTER TABLE spec DROP CONSTRAINT FK_C00E173EB7683595');
        $this->addSql('DROP TABLE spec');
    }
}
