<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240423134256 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE products_orders (products_id INT NOT NULL, orders_id INT NOT NULL, INDEX IDX_631C76C46C8A81A9 (products_id), INDEX IDX_631C76C4CFFE9AD6 (orders_id), PRIMARY KEY(products_id, orders_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE products_orders ADD CONSTRAINT FK_631C76C46C8A81A9 FOREIGN KEY (products_id) REFERENCES products (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE products_orders ADD CONSTRAINT FK_631C76C4CFFE9AD6 FOREIGN KEY (orders_id) REFERENCES orders (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE products_orders DROP FOREIGN KEY FK_631C76C46C8A81A9');
        $this->addSql('ALTER TABLE products_orders DROP FOREIGN KEY FK_631C76C4CFFE9AD6');
        $this->addSql('DROP TABLE products_orders');
    }
}
