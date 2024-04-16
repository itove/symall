<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240416072633 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SEQUENCE cart_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE TABLE cart (id INT NOT NULL, customer_id INT DEFAULT NULL, product_id INT DEFAULT NULL, price NUMERIC(10, 2) DEFAULT NULL, quantity SMALLINT DEFAULT NULL, spec VARCHAR(255) DEFAULT NULL, checked BOOLEAN NOT NULL, image VARCHAR(255) DEFAULT NULL, created_at TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL, updated_at TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL, deleted BOOLEAN NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_BA388B79395C3F3 ON cart (customer_id)');
        $this->addSql('CREATE INDEX IDX_BA388B74584665A ON cart (product_id)');
        $this->addSql('COMMENT ON COLUMN cart.created_at IS \'(DC2Type:datetime_immutable)\'');
        $this->addSql('COMMENT ON COLUMN cart.updated_at IS \'(DC2Type:datetime_immutable)\'');
        $this->addSql('CREATE TABLE cart_goods (cart_id INT NOT NULL, goods_id INT NOT NULL, PRIMARY KEY(cart_id, goods_id))');
        $this->addSql('CREATE INDEX IDX_5A89D4251AD5CDBF ON cart_goods (cart_id)');
        $this->addSql('CREATE INDEX IDX_5A89D425B7683595 ON cart_goods (goods_id)');
        $this->addSql('ALTER TABLE cart ADD CONSTRAINT FK_BA388B79395C3F3 FOREIGN KEY (customer_id) REFERENCES "user" (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE cart ADD CONSTRAINT FK_BA388B74584665A FOREIGN KEY (product_id) REFERENCES product (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE cart_goods ADD CONSTRAINT FK_5A89D4251AD5CDBF FOREIGN KEY (cart_id) REFERENCES cart (id) ON DELETE CASCADE NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE cart_goods ADD CONSTRAINT FK_5A89D425B7683595 FOREIGN KEY (goods_id) REFERENCES goods (id) ON DELETE CASCADE NOT DEFERRABLE INITIALLY IMMEDIATE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('DROP SEQUENCE cart_id_seq CASCADE');
        $this->addSql('ALTER TABLE cart DROP CONSTRAINT FK_BA388B79395C3F3');
        $this->addSql('ALTER TABLE cart DROP CONSTRAINT FK_BA388B74584665A');
        $this->addSql('ALTER TABLE cart_goods DROP CONSTRAINT FK_5A89D4251AD5CDBF');
        $this->addSql('ALTER TABLE cart_goods DROP CONSTRAINT FK_5A89D425B7683595');
        $this->addSql('DROP TABLE cart');
        $this->addSql('DROP TABLE cart_goods');
    }
}
