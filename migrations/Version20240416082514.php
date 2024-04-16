<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240416082514 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SEQUENCE topic_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE TABLE topic (id INT NOT NULL, title VARCHAR(255) NOT NULL, content TEXT DEFAULT NULL, price NUMERIC(10, 2) NOT NULL, read INT NOT NULL, created_at TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL, updated_at TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL, image VARCHAR(255) DEFAULT NULL, deleted BOOLEAN NOT NULL, PRIMARY KEY(id))');
        $this->addSql('COMMENT ON COLUMN topic.created_at IS \'(DC2Type:datetime_immutable)\'');
        $this->addSql('COMMENT ON COLUMN topic.updated_at IS \'(DC2Type:datetime_immutable)\'');
        $this->addSql('CREATE TABLE topic_goods (topic_id INT NOT NULL, goods_id INT NOT NULL, PRIMARY KEY(topic_id, goods_id))');
        $this->addSql('CREATE INDEX IDX_BE50154F1F55203D ON topic_goods (topic_id)');
        $this->addSql('CREATE INDEX IDX_BE50154FB7683595 ON topic_goods (goods_id)');
        $this->addSql('ALTER TABLE topic_goods ADD CONSTRAINT FK_BE50154F1F55203D FOREIGN KEY (topic_id) REFERENCES topic (id) ON DELETE CASCADE NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE topic_goods ADD CONSTRAINT FK_BE50154FB7683595 FOREIGN KEY (goods_id) REFERENCES goods (id) ON DELETE CASCADE NOT DEFERRABLE INITIALLY IMMEDIATE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('DROP SEQUENCE topic_id_seq CASCADE');
        $this->addSql('ALTER TABLE topic_goods DROP CONSTRAINT FK_BE50154F1F55203D');
        $this->addSql('ALTER TABLE topic_goods DROP CONSTRAINT FK_BE50154FB7683595');
        $this->addSql('DROP TABLE topic');
        $this->addSql('DROP TABLE topic_goods');
    }
}
