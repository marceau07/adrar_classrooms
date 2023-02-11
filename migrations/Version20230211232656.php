<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230211232656 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE utilisateurs_chapitres ADD chapitre_id INT NOT NULL');
        $this->addSql('ALTER TABLE utilisateurs_chapitres ADD CONSTRAINT FK_A32407E71FBEEF7B FOREIGN KEY (chapitre_id) REFERENCES chapitres (id)');
        $this->addSql('CREATE INDEX IDX_A32407E71FBEEF7B ON utilisateurs_chapitres (chapitre_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE utilisateurs_chapitres DROP FOREIGN KEY FK_A32407E71FBEEF7B');
        $this->addSql('DROP INDEX IDX_A32407E71FBEEF7B ON utilisateurs_chapitres');
        $this->addSql('ALTER TABLE utilisateurs_chapitres DROP chapitre_id');
    }
}
