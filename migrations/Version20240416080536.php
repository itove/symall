<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240416080536 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SEQUENCE footprint_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE TABLE footprint (id INT NOT NULL, customer_id INT NOT NULL, goods_id INT NOT NULL, created_at TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL, updated_at TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL, deleted BOOLEAN NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE INDEX IDX_FE02A6379395C3F3 ON footprint (customer_id)');
        $this->addSql('CREATE INDEX IDX_FE02A637B7683595 ON footprint (goods_id)');
        $this->addSql('COMMENT ON COLUMN footprint.created_at IS \'(DC2Type:datetime_immutable)\'');
        $this->addSql('COMMENT ON COLUMN footprint.updated_at IS \'(DC2Type:datetime_immutable)\'');
        $this->addSql('ALTER TABLE footprint ADD CONSTRAINT FK_FE02A6379395C3F3 FOREIGN KEY (customer_id) REFERENCES "user" (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE footprint ADD CONSTRAINT FK_FE02A637B7683595 FOREIGN KEY (goods_id) REFERENCES goods (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('DROP SEQUENCE footprint_id_seq CASCADE');
        $this->addSql('ALTER TABLE footprint DROP CONSTRAINT FK_FE02A6379395C3F3');
        $this->addSql('ALTER TABLE footprint DROP CONSTRAINT FK_FE02A637B7683595');
        $this->addSql('DROP TABLE footprint');
    }
}
