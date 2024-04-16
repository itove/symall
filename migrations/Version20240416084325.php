<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240416084325 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE groupon ADD rule_id INT NOT NULL');
        $this->addSql('ALTER TABLE groupon ADD CONSTRAINT FK_CE8AE28A744E0351 FOREIGN KEY (rule_id) REFERENCES groupon_rule (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('CREATE INDEX IDX_CE8AE28A744E0351 ON groupon (rule_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('ALTER TABLE groupon DROP CONSTRAINT FK_CE8AE28A744E0351');
        $this->addSql('DROP INDEX IDX_CE8AE28A744E0351');
        $this->addSql('ALTER TABLE groupon DROP rule_id');
    }
}
