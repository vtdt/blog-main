CREATE
    DATABASE comment_section;
USE
    comment_section;

CREATE TABLE users
(
    id         INT         NOT NULL AUTO_INCREMENT PRIMARY KEY,
    username   VARCHAR(32) NOT NULL,
    passphrase VARCHAR(32) NOT NULL
);

CREATE TABLE comments
(
    id      INT           NOT NULL AUTO_INCREMENT PRIMARY KEY,
    user    VARCHAR(32)   NOT NULL,
    comment VARCHAR(3000) NOT NULL,
    date    FLOAT         NOT NULL
);
