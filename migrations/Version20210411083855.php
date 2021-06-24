<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210411083855 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE circuit (id INT AUTO_INCREMENT NOT NULL, n_box VARCHAR(255) DEFAULT NULL, date_pres DATE DEFAULT NULL, date_releve DATE DEFAULT NULL, vals_prs INT DEFAULT NULL, consommation INT DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE log (id INT AUTO_INCREMENT NOT NULL, caution_box DOUBLE PRECISION DEFAULT NULL, date_entree INT DEFAULT NULL, pers_pay DATE DEFAULT NULL, somme_pay VARCHAR(255) NOT NULL, date_pay INT DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE nbox (id INT AUTO_INCREMENT NOT NULL, n_box VARCHAR(255) NOT NULL, hofa VARCHAR(255) NOT NULL, securite VARCHAR(255) NOT NULL, emplacement VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE piece (id INT AUTO_INCREMENT NOT NULL, log DOUBLE PRECISION DEFAULT NULL, securite DOUBLE PRECISION DEFAULT NULL, emplacement LONGTEXT DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE circuit');
        $this->addSql('DROP TABLE log');
        $this->addSql('DROP TABLE nbox');
        $this->addSql('DROP TABLE piece');
    }
}
