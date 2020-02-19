<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200217112442 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE contact (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, prenom VARCHAR(255) NOT NULL, sujet VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, message LONGTEXT NOT NULL, date DATETIME NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE homes (id INT AUTO_INCREMENT NOT NULL, currentuser_id INT DEFAULT NULL, type VARCHAR(30) NOT NULL, service VARCHAR(30) NOT NULL, rooms INT NOT NULL, surface INT NOT NULL, price INT NOT NULL, adress VARCHAR(255) NOT NULL, description LONGTEXT NOT NULL, title VARCHAR(100) NOT NULL, active SMALLINT NOT NULL, furnished TINYINT(1) NOT NULL, createdat DATETIME NOT NULL, updatedat DATETIME NOT NULL, pictures JSON DEFAULT NULL, bedrooms INT DEFAULT NULL, bathrooms INT DEFAULT NULL, viewcounter INT NOT NULL, googlemap LONGTEXT DEFAULT NULL, INDEX IDX_9DACCBD35994EE78 (currentuser_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE profils (id INT AUTO_INCREMENT NOT NULL, user_id INT NOT NULL, job VARCHAR(255) NOT NULL, contract VARCHAR(30) NOT NULL, salary INT DEFAULT NULL, numberresidents INT NOT NULL, animals TINYINT(1) DEFAULT NULL, age INT NOT NULL, situation VARCHAR(50) NOT NULL, guarantor TINYINT(1) DEFAULT NULL, UNIQUE INDEX UNIQ_75831F5EA76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE requests (id INT AUTO_INCREMENT NOT NULL, user_id INT NOT NULL, home_id INT NOT NULL, job VARCHAR(50) NOT NULL, contract VARCHAR(30) NOT NULL, salary INT DEFAULT NULL, numberresidents INT NOT NULL, animals TINYINT(1) DEFAULT NULL, age INT NOT NULL, situation VARCHAR(50) NOT NULL, guarantor TINYINT(1) DEFAULT NULL, createdat DATETIME NOT NULL, requeststatus INT NOT NULL, acceptedat DATETIME DEFAULT NULL, refusedat DATETIME DEFAULT NULL, INDEX IDX_7B85D651A76ED395 (user_id), INDEX IDX_7B85D65128CDC89C (home_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE users (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(180) NOT NULL, roles JSON NOT NULL, password VARCHAR(255) NOT NULL, firstname VARCHAR(50) NOT NULL, lastname VARCHAR(50) NOT NULL, phone VARCHAR(10) DEFAULT NULL, active SMALLINT NOT NULL, token VARCHAR(255) NOT NULL, agree_terms TINYINT(1) NOT NULL, createdat DATETIME NOT NULL, UNIQUE INDEX UNIQ_1483A5E9E7927C74 (email), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE users_homes (users_id INT NOT NULL, homes_id INT NOT NULL, INDEX IDX_7ADB6F9A67B3B43D (users_id), INDEX IDX_7ADB6F9A1EE0AF82 (homes_id), PRIMARY KEY(users_id, homes_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE view_stats (id INT AUTO_INCREMENT NOT NULL, home_id INT NOT NULL, date DATETIME NOT NULL, INDEX IDX_3564C0B928CDC89C (home_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE homes ADD CONSTRAINT FK_9DACCBD35994EE78 FOREIGN KEY (currentuser_id) REFERENCES users (id)');
        $this->addSql('ALTER TABLE profils ADD CONSTRAINT FK_75831F5EA76ED395 FOREIGN KEY (user_id) REFERENCES users (id)');
        $this->addSql('ALTER TABLE requests ADD CONSTRAINT FK_7B85D651A76ED395 FOREIGN KEY (user_id) REFERENCES users (id)');
        $this->addSql('ALTER TABLE requests ADD CONSTRAINT FK_7B85D65128CDC89C FOREIGN KEY (home_id) REFERENCES homes (id)');
        $this->addSql('ALTER TABLE users_homes ADD CONSTRAINT FK_7ADB6F9A67B3B43D FOREIGN KEY (users_id) REFERENCES users (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE users_homes ADD CONSTRAINT FK_7ADB6F9A1EE0AF82 FOREIGN KEY (homes_id) REFERENCES homes (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE view_stats ADD CONSTRAINT FK_3564C0B928CDC89C FOREIGN KEY (home_id) REFERENCES homes (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE requests DROP FOREIGN KEY FK_7B85D65128CDC89C');
        $this->addSql('ALTER TABLE users_homes DROP FOREIGN KEY FK_7ADB6F9A1EE0AF82');
        $this->addSql('ALTER TABLE view_stats DROP FOREIGN KEY FK_3564C0B928CDC89C');
        $this->addSql('ALTER TABLE homes DROP FOREIGN KEY FK_9DACCBD35994EE78');
        $this->addSql('ALTER TABLE profils DROP FOREIGN KEY FK_75831F5EA76ED395');
        $this->addSql('ALTER TABLE requests DROP FOREIGN KEY FK_7B85D651A76ED395');
        $this->addSql('ALTER TABLE users_homes DROP FOREIGN KEY FK_7ADB6F9A67B3B43D');
        $this->addSql('DROP TABLE contact');
        $this->addSql('DROP TABLE homes');
        $this->addSql('DROP TABLE profils');
        $this->addSql('DROP TABLE requests');
        $this->addSql('DROP TABLE users');
        $this->addSql('DROP TABLE users_homes');
        $this->addSql('DROP TABLE view_stats');
    }
}
