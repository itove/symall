<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240401030538 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SEQUENCE attrib_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE TABLE attrib (id INT NOT NULL, goods_id INT NOT NULL, attribute VARCHAR(255) NOT NULL, value VARCHAR(255) NOT NULL, created_at TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL, updated_at TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL, deleted BOOLEAN NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE INDEX IDX_DA93603CB7683595 ON attrib (goods_id)');
        $this->addSql('COMMENT ON COLUMN attrib.created_at IS \'(DC2Type:datetime_immutable)\'');
        $this->addSql('COMMENT ON COLUMN attrib.updated_at IS \'(DC2Type:datetime_immutable)\'');
        $this->addSql('ALTER TABLE attrib ADD CONSTRAINT FK_DA93603CB7683595 FOREIGN KEY (goods_id) REFERENCES goods (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('DROP SEQUENCE attrib_id_seq CASCADE');
        $this->addSql('ALTER TABLE attrib DROP CONSTRAINT FK_DA93603CB7683595');
        $this->addSql('DROP TABLE attrib');
    }
}
