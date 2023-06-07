CREATE TABLE user (
  id INT PRIMARY KEY AUTO_INCREMENT,
  name VARCHAR(50) NOT NULL,
  email VARCHAR(50) NOT NULL,
  role VARCHAR(20) NOT NULL
);

INSERT INTO user (name, email, role) VALUES ('Vincent Parrot', 'vincent.parrot@mail.fr', 'admin');

INSERT INTO users (email, password, role)
VALUES ('employe1.garage@mail.fr', 'employe1', 'employee');
VALUES ('employe2.garage@mail.fr', 'employe2', 'employee');
VALUES ('employe3.garage@mail.fr', 'employe3', 'employee');
VALUES ('employe4.garage@mail.fr', 'employe4', 'employee');
-- Répétez cette requête pour chaque employé avec des emails et des mots de passe appropriés.
