<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210224150332 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE articles ADD orders_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE articles ADD CONSTRAINT FK_BFDD3168CFFE9AD6 FOREIGN KEY (orders_id) REFERENCES `orders` (id)');
        $this->addSql('CREATE INDEX IDX_BFDD3168CFFE9AD6 ON articles (orders_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE articles DROP FOREIGN KEY FK_BFDD3168CFFE9AD6');
        $this->addSql('DROP INDEX IDX_BFDD3168CFFE9AD6 ON articles');
        $this->addSql('ALTER TABLE articles DROP orders_id');
    }
}
