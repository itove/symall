<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240416073910 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE cart DROP CONSTRAINT fk_ba388b79395c3f3');
        $this->addSql('DROP INDEX uniq_ba388b79395c3f3');
        $this->addSql('ALTER TABLE cart DROP customer_id');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('ALTER TABLE cart ADD customer_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE cart ADD CONSTRAINT fk_ba388b79395c3f3 FOREIGN KEY (customer_id) REFERENCES "user" (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('CREATE UNIQUE INDEX uniq_ba388b79395c3f3 ON cart (customer_id)');
    }
}
