CREATE DATABASE group9;
use group9;

CREATE TABLE user (  
  username VARCHAR(255) NOT NULL,  
  password VARCHAR(255) NOT NULL  
);

CREATE TABLE food (  
  name VARCHAR(255) NOT NULL,  
  price DECIMAL(10, 2) NOT NULL  
);


INSERT INTO food (name, price) VALUES ('Apple', 0.50);  
INSERT INTO food (name, price) VALUES ('Banana', 0.25);  
INSERT INTO food (name, price) VALUES ('Orange', 0.75);

INSERT INTO user (username, password) VALUES ('zs', 'zs');  
INSERT INTO user (username, password) VALUES ('ls', 'ls');  
INSERT INTO user (username, password) VALUES ('ww', 'ww');
INSERT INTO user (username, password) VALUES ('zl', 'zl');
INSERT INTO user (username, password) VALUES ('lb', 'lb');
INSERT INTO user (username, password) VALUES ('admin', 'admin');

