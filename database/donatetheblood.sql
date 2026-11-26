-- Database for Donate The Blood
-- Import this file in phpMyAdmin (Import tab) before opening the site.
-- The table matches the columns used in index.php and donet1.php.

CREATE DATABASE IF NOT EXISTS donatetheblood
  DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE donatetheblood;

CREATE TABLE IF NOT EXISTS donor (
  id         INT AUTO_INCREMENT PRIMARY KEY,
  name       VARCHAR(100) NOT NULL,
  gender     VARCHAR(10)  NOT NULL,
  email      VARCHAR(100) NOT NULL,
  city       VARCHAR(100) NOT NULL,
  dob        DATE         NOT NULL,
  contact    VARCHAR(20)  NOT NULL,
  save_life  VARCHAR(10)  NOT NULL,   -- how many times the donor has given blood
  password   VARCHAR(255) NOT NULL    -- stored as a bcrypt hash
);
