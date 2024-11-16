<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20241116222614 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE participation ADD id_participation INT AUTO_INCREMENT NOT NULL, ADD date_inscription DATETIME NOT NULL, DROP id, ADD PRIMARY KEY (id_participation)');
        $this->addSql('ALTER TABLE utilisateur ADD nom_user VARCHAR(255) NOT NULL, ADD prenom_user VARCHAR(255) NOT NULL, DROP nom, DROP prenom');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE participation MODIFY id_participation INT NOT NULL');
        $this->addSql('DROP INDEX `primary` ON participation');
        $this->addSql('ALTER TABLE participation ADD id INT NOT NULL, DROP id_participation, DROP date_inscription');
        $this->addSql('ALTER TABLE utilisateur ADD nom VARCHAR(255) NOT NULL, ADD prenom VARCHAR(255) NOT NULL, DROP nom_user, DROP prenom_user');
    }
}
