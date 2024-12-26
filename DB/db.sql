CREATE DATABASE user_management;

use DATABASE user_management;

CREATE TABLE Users (
    ID INT AUTO_INCREMENT ;
    firstname VARCHAR(50) NOT NULL;
    lastname VARCHAR(50) NOT NULL;
    email VARCHAR(100) NOT NULL;
    passwordd VARCHAR(255) NOT NULL;
)