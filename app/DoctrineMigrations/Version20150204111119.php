<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20150204111119 extends AbstractMigration
{
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE person (id INT AUTO_INCREMENT NOT NULL, address_id INT DEFAULT NULL, name VARCHAR(255) NOT NULL, last_name VARCHAR(255) NOT NULL, initial VARCHAR(5) DEFAULT NULL, email VARCHAR(255) NOT NULL, residentialPhone VARCHAR(255) NOT NULL, cellPhone VARCHAR(255) NOT NULL, createdAt DATETIME NOT NULL, updatedAt DATETIME NOT NULL, type VARCHAR(255) NOT NULL, tax_number VARCHAR(255) DEFAULT NULL, state_registration VARCHAR(255) DEFAULT NULL, city_registration VARCHAR(255) DEFAULT NULL, INDEX IDX_34DCD176F5B7AF75 (address_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE address (id INT AUTO_INCREMENT NOT NULL, address1 VARCHAR(255) NOT NULL, address2 VARCHAR(255) DEFAULT NULL, neighborhood VARCHAR(255) DEFAULT NULL, city VARCHAR(255) NOT NULL, state VARCHAR(255) NOT NULL, country VARCHAR(255) NOT NULL, zip VARCHAR(255) NOT NULL, reference VARCHAR(255) NOT NULL, createdAt DATETIME NOT NULL, updatedAt DATETIME NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE client (id INT AUTO_INCREMENT NOT NULL, person_id INT DEFAULT NULL, courses LONGTEXT NOT NULL COMMENT \'(DC2Type:array)\', certifications LONGTEXT NOT NULL COMMENT \'(DC2Type:array)\', c VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_C7440455217BBB47 (person_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE Destination (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, region VARCHAR(255) NOT NULL, country VARCHAR(255) NOT NULL, description LONGTEXT NOT NULL, main_picture VARCHAR(255) NOT NULL, createdAt DATETIME NOT NULL, updatedAt DATETIME NOT NULL, evaluations LONGTEXT NOT NULL COMMENT \'(DC2Type:array)\', trips LONGTEXT NOT NULL COMMENT \'(DC2Type:array)\', PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE supplier (id INT AUTO_INCREMENT NOT NULL, person_id INT DEFAULT NULL, active TINYINT(1) NOT NULL, createdAt DATETIME NOT NULL, updatedAt DATETIME NOT NULL, UNIQUE INDEX UNIQ_9B2A6C7E217BBB47 (person_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE classes (id INT AUTO_INCREMENT NOT NULL, course LONGTEXT NOT NULL COMMENT \'(DC2Type:object)\', startDate DATE NOT NULL, endDate DATE NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE course (id INT AUTO_INCREMENT NOT NULL, course VARCHAR(255) NOT NULL, preRequisite LONGTEXT NOT NULL, createdAt DATETIME NOT NULL, updatedAt DATETIME NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE person ADD CONSTRAINT FK_34DCD176F5B7AF75 FOREIGN KEY (address_id) REFERENCES address (id)');
        $this->addSql('ALTER TABLE client ADD CONSTRAINT FK_C7440455217BBB47 FOREIGN KEY (person_id) REFERENCES person (id)');
        $this->addSql('ALTER TABLE supplier ADD CONSTRAINT FK_9B2A6C7E217BBB47 FOREIGN KEY (person_id) REFERENCES person (id)');
    }

    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE client DROP FOREIGN KEY FK_C7440455217BBB47');
        $this->addSql('ALTER TABLE supplier DROP FOREIGN KEY FK_9B2A6C7E217BBB47');
        $this->addSql('ALTER TABLE person DROP FOREIGN KEY FK_34DCD176F5B7AF75');
        $this->addSql('DROP TABLE person');
        $this->addSql('DROP TABLE address');
        $this->addSql('DROP TABLE client');
        $this->addSql('DROP TABLE Destination');
        $this->addSql('DROP TABLE supplier');
        $this->addSql('DROP TABLE classes');
        $this->addSql('DROP TABLE course');
    }
}
