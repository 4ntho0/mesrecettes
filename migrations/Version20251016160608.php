<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20251016160608 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE repa_legume (repa_id INT NOT NULL, legume_id INT NOT NULL, INDEX IDX_F4DCBD645DEAEC1E (repa_id), INDEX IDX_F4DCBD6425F18E37 (legume_id), PRIMARY KEY(repa_id, legume_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE repa_viande (repa_id INT NOT NULL, viande_id INT NOT NULL, INDEX IDX_77BBD99C5DEAEC1E (repa_id), INDEX IDX_77BBD99C4C61F684 (viande_id), PRIMARY KEY(repa_id, viande_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE repa_fromage (repa_id INT NOT NULL, fromage_id INT NOT NULL, INDEX IDX_81A3C19C5DEAEC1E (repa_id), INDEX IDX_81A3C19C7FCE0491 (fromage_id), PRIMARY KEY(repa_id, fromage_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE repa_feculent (repa_id INT NOT NULL, feculent_id INT NOT NULL, INDEX IDX_EB634D065DEAEC1E (repa_id), INDEX IDX_EB634D062A065A8B (feculent_id), PRIMARY KEY(repa_id, feculent_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE repa_epice (repa_id INT NOT NULL, epice_id INT NOT NULL, INDEX IDX_756890665DEAEC1E (repa_id), INDEX IDX_7568906675D0E981 (epice_id), PRIMARY KEY(repa_id, epice_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE repa_autre (repa_id INT NOT NULL, autre_id INT NOT NULL, INDEX IDX_F011D5A75DEAEC1E (repa_id), INDEX IDX_F011D5A7416A67AB (autre_id), PRIMARY KEY(repa_id, autre_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE repa_legume ADD CONSTRAINT FK_F4DCBD645DEAEC1E FOREIGN KEY (repa_id) REFERENCES repa (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE repa_legume ADD CONSTRAINT FK_F4DCBD6425F18E37 FOREIGN KEY (legume_id) REFERENCES legume (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE repa_viande ADD CONSTRAINT FK_77BBD99C5DEAEC1E FOREIGN KEY (repa_id) REFERENCES repa (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE repa_viande ADD CONSTRAINT FK_77BBD99C4C61F684 FOREIGN KEY (viande_id) REFERENCES viande (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE repa_fromage ADD CONSTRAINT FK_81A3C19C5DEAEC1E FOREIGN KEY (repa_id) REFERENCES repa (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE repa_fromage ADD CONSTRAINT FK_81A3C19C7FCE0491 FOREIGN KEY (fromage_id) REFERENCES fromage (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE repa_feculent ADD CONSTRAINT FK_EB634D065DEAEC1E FOREIGN KEY (repa_id) REFERENCES repa (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE repa_feculent ADD CONSTRAINT FK_EB634D062A065A8B FOREIGN KEY (feculent_id) REFERENCES feculent (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE repa_epice ADD CONSTRAINT FK_756890665DEAEC1E FOREIGN KEY (repa_id) REFERENCES repa (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE repa_epice ADD CONSTRAINT FK_7568906675D0E981 FOREIGN KEY (epice_id) REFERENCES epice (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE repa_autre ADD CONSTRAINT FK_F011D5A75DEAEC1E FOREIGN KEY (repa_id) REFERENCES repa (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE repa_autre ADD CONSTRAINT FK_F011D5A7416A67AB FOREIGN KEY (autre_id) REFERENCES autre (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE repa ADD legume VARCHAR(255) NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE repa_legume DROP FOREIGN KEY FK_F4DCBD645DEAEC1E');
        $this->addSql('ALTER TABLE repa_legume DROP FOREIGN KEY FK_F4DCBD6425F18E37');
        $this->addSql('ALTER TABLE repa_viande DROP FOREIGN KEY FK_77BBD99C5DEAEC1E');
        $this->addSql('ALTER TABLE repa_viande DROP FOREIGN KEY FK_77BBD99C4C61F684');
        $this->addSql('ALTER TABLE repa_fromage DROP FOREIGN KEY FK_81A3C19C5DEAEC1E');
        $this->addSql('ALTER TABLE repa_fromage DROP FOREIGN KEY FK_81A3C19C7FCE0491');
        $this->addSql('ALTER TABLE repa_feculent DROP FOREIGN KEY FK_EB634D065DEAEC1E');
        $this->addSql('ALTER TABLE repa_feculent DROP FOREIGN KEY FK_EB634D062A065A8B');
        $this->addSql('ALTER TABLE repa_epice DROP FOREIGN KEY FK_756890665DEAEC1E');
        $this->addSql('ALTER TABLE repa_epice DROP FOREIGN KEY FK_7568906675D0E981');
        $this->addSql('ALTER TABLE repa_autre DROP FOREIGN KEY FK_F011D5A75DEAEC1E');
        $this->addSql('ALTER TABLE repa_autre DROP FOREIGN KEY FK_F011D5A7416A67AB');
        $this->addSql('DROP TABLE repa_legume');
        $this->addSql('DROP TABLE repa_viande');
        $this->addSql('DROP TABLE repa_fromage');
        $this->addSql('DROP TABLE repa_feculent');
        $this->addSql('DROP TABLE repa_epice');
        $this->addSql('DROP TABLE repa_autre');
        $this->addSql('ALTER TABLE repa DROP legume');
    }
}
