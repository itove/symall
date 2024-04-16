<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240416081807 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SEQUENCE search_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE TABLE search (id INT NOT NULL, customer_id INT NOT NULL, keyword VARCHAR(255) NOT NULL, created_at TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE INDEX IDX_B4F0DBA79395C3F3 ON search (customer_id)');
        $this->addSql('COMMENT ON COLUMN search.created_at IS \'(DC2Type:datetime_immutable)\'');
        $this->addSql('ALTER TABLE search ADD CONSTRAINT FK_B4F0DBA79395C3F3 FOREIGN KEY (customer_id) REFERENCES "user" (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('DROP SEQUENCE search_id_seq CASCADE');
        $this->addSql('ALTER TABLE search DROP CONSTRAINT FK_B4F0DBA79395C3F3');
        $this->addSql('DROP TABLE search');
    }
}
