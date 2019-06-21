<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190621125925 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE champion_class (id INT AUTO_INCREMENT NOT NULL, synergy_id INT NOT NULL, name VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_5F3A42365CD4060B (synergy_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE class_champion (id INT AUTO_INCREMENT NOT NULL, icon VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE class_synergy (id INT AUTO_INCREMENT NOT NULL, description VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE class_synergy_requirement (id INT AUTO_INCREMENT NOT NULL, synergy_id INT NOT NULL, count INT NOT NULL, description VARCHAR(255) NOT NULL, INDEX IDX_1F86ACD05CD4060B (synergy_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE champion_class ADD CONSTRAINT FK_5F3A42365CD4060B FOREIGN KEY (synergy_id) REFERENCES class_synergy (id)');
        $this->addSql('ALTER TABLE class_synergy_requirement ADD CONSTRAINT FK_1F86ACD05CD4060B FOREIGN KEY (synergy_id) REFERENCES class_synergy (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE champion_class DROP FOREIGN KEY FK_5F3A42365CD4060B');
        $this->addSql('ALTER TABLE class_synergy_requirement DROP FOREIGN KEY FK_1F86ACD05CD4060B');
        $this->addSql('DROP TABLE champion_class');
        $this->addSql('DROP TABLE class_champion');
        $this->addSql('DROP TABLE class_synergy');
        $this->addSql('DROP TABLE class_synergy_requirement');
    }
}
