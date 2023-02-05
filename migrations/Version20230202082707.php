<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230202082707 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE user_dive (user_id INT NOT NULL, dive_id INT NOT NULL, INDEX IDX_EC3A4889A76ED395 (user_id), INDEX IDX_EC3A48892E04E766 (dive_id), PRIMARY KEY(user_id, dive_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE user_dive ADD CONSTRAINT FK_EC3A4889A76ED395 FOREIGN KEY (user_id) REFERENCES user (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE user_dive ADD CONSTRAINT FK_EC3A48892E04E766 FOREIGN KEY (dive_id) REFERENCES dive (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE user_dive DROP FOREIGN KEY FK_EC3A4889A76ED395');
        $this->addSql('ALTER TABLE user_dive DROP FOREIGN KEY FK_EC3A48892E04E766');
        $this->addSql('DROP TABLE user_dive');
    }
}
