<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20251010130459 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE tournee (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, date DATETIME NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE tournee_depot (tournee_id INT NOT NULL, depot_id INT NOT NULL, INDEX IDX_FB7C59D5F661D013 (tournee_id), INDEX IDX_FB7C59D58510D4DE (depot_id), PRIMARY KEY(tournee_id, depot_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE tournee_depot ADD CONSTRAINT FK_FB7C59D5F661D013 FOREIGN KEY (tournee_id) REFERENCES tournee (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE tournee_depot ADD CONSTRAINT FK_FB7C59D58510D4DE FOREIGN KEY (depot_id) REFERENCES depot (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE tournee_depot DROP FOREIGN KEY FK_FB7C59D5F661D013');
        $this->addSql('ALTER TABLE tournee_depot DROP FOREIGN KEY FK_FB7C59D58510D4DE');
        $this->addSql('DROP TABLE tournee');
        $this->addSql('DROP TABLE tournee_depot');
    }
}
