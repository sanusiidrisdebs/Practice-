CREATE TABLE votes (
  id INT(11) NOT NULL AUTO_INCREMENT,
  voter_name VARCHAR(255),
  vote_choice VARCHAR(255) NOT NULL,
  vote_date DATETIME NOT NULL,
  PRIMARY KEY (id)
);
