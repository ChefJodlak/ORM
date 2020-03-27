<?php

declare(strict_types=1);

namespace Migrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200327201139 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE domy (id INT AUTO_INCREMENT NOT NULL, nieruchomosc_id INT DEFAULT NULL, powierzchnia_dzialki DOUBLE PRECISION NOT NULL, rok_budowy INT NOT NULL, UNIQUE INDEX UNIQ_2F01EF27C74FC62D (nieruchomosc_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE grunty (id INT AUTO_INCREMENT NOT NULL, nieruchomosc_id INT DEFAULT NULL, pozwolenie_na_budowe TINYINT(1) NOT NULL, UNIQUE INDEX UNIQ_5B03EE00C74FC62D (nieruchomosc_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE domy ADD CONSTRAINT FK_2F01EF27C74FC62D FOREIGN KEY (nieruchomosc_id) REFERENCES nieruchomosci (id)');
        $this->addSql('ALTER TABLE grunty ADD CONSTRAINT FK_5B03EE00C74FC62D FOREIGN KEY (nieruchomosc_id) REFERENCES nieruchomosci (id)');
        $this->addSql('ALTER TABLE mieszkania ADD liczba_pokoi INT NOT NULL');
        $this->addSql('ALTER TABLE nieruchomosci ADD numer VARCHAR(255) NOT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE domy');
        $this->addSql('DROP TABLE grunty');
        $this->addSql('ALTER TABLE mieszkania DROP liczba_pokoi');
        $this->addSql('ALTER TABLE nieruchomosci DROP numer');
    }
}
