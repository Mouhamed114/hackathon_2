<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230629103804 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE smartphone ADD mark_id INT NOT NULL, DROP marque');
        $this->addSql('ALTER TABLE smartphone ADD CONSTRAINT FK_26B07E2E4290F12B FOREIGN KEY (mark_id) REFERENCES mark (id)');
        $this->addSql('CREATE INDEX IDX_26B07E2E4290F12B ON smartphone (mark_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE smartphone DROP FOREIGN KEY FK_26B07E2E4290F12B');
        $this->addSql('DROP INDEX IDX_26B07E2E4290F12B ON smartphone');
        $this->addSql('ALTER TABLE smartphone ADD marque VARCHAR(255) NOT NULL, DROP mark_id');
    }
}
