<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230211232344 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE avis (id INT AUTO_INCREMENT NOT NULL, utilisateur_id INT NOT NULL, contenu LONGTEXT NOT NULL, INDEX IDX_8F91ABF0FB88E14F (utilisateur_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE chapitres (id INT AUTO_INCREMENT NOT NULL, cours_id INT NOT NULL, titre VARCHAR(50) NOT NULL, contenu LONGTEXT NOT NULL, position INT NOT NULL, INDEX IDX_508679FC7ECF78B0 (cours_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE cours (id INT AUTO_INCREMENT NOT NULL, titre VARCHAR(50) NOT NULL, synopsis VARCHAR(100) NOT NULL, niveau SMALLINT NOT NULL, temps_estime INT NOT NULL, image VARCHAR(100) NOT NULL, date DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', cree SMALLINT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE utilisateurs_chapitres (id INT AUTO_INCREMENT NOT NULL, utilisateur_id INT NOT NULL, date_inscription DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', termine SMALLINT NOT NULL, INDEX IDX_A32407E7FB88E14F (utilisateur_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE avis ADD CONSTRAINT FK_8F91ABF0FB88E14F FOREIGN KEY (utilisateur_id) REFERENCES `utilisateurs` (id)');
        $this->addSql('ALTER TABLE chapitres ADD CONSTRAINT FK_508679FC7ECF78B0 FOREIGN KEY (cours_id) REFERENCES cours (id)');
        $this->addSql('ALTER TABLE utilisateurs_chapitres ADD CONSTRAINT FK_A32407E7FB88E14F FOREIGN KEY (utilisateur_id) REFERENCES `utilisateurs` (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE avis DROP FOREIGN KEY FK_8F91ABF0FB88E14F');
        $this->addSql('ALTER TABLE chapitres DROP FOREIGN KEY FK_508679FC7ECF78B0');
        $this->addSql('ALTER TABLE utilisateurs_chapitres DROP FOREIGN KEY FK_A32407E7FB88E14F');
        $this->addSql('DROP TABLE avis');
        $this->addSql('DROP TABLE chapitres');
        $this->addSql('DROP TABLE cours');
        $this->addSql('DROP TABLE utilisateurs_chapitres');
    }
}
