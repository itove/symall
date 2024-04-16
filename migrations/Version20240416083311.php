<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240416083311 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE goods ADD brand_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE goods ADD category_id INT NOT NULL');
        $this->addSql('ALTER TABLE goods ADD CONSTRAINT FK_563B92D44F5D008 FOREIGN KEY (brand_id) REFERENCES brand (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE goods ADD CONSTRAINT FK_563B92D12469DE2 FOREIGN KEY (category_id) REFERENCES category (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('CREATE INDEX IDX_563B92D44F5D008 ON goods (brand_id)');
        $this->addSql('CREATE INDEX IDX_563B92D12469DE2 ON goods (category_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('ALTER TABLE goods DROP CONSTRAINT FK_563B92D44F5D008');
        $this->addSql('ALTER TABLE goods DROP CONSTRAINT FK_563B92D12469DE2');
        $this->addSql('DROP INDEX IDX_563B92D44F5D008');
        $this->addSql('DROP INDEX IDX_563B92D12469DE2');
        $this->addSql('ALTER TABLE goods DROP brand_id');
        $this->addSql('ALTER TABLE goods DROP category_id');
    }
}
