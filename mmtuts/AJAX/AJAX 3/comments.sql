CREATE TABLE comments(
	id INT(11) NOT NULL auto_increment PRIMARY KEY,
	author TEXT NOT NULL,
	message TEXT NOT NULL
);

INSERT INTO comments (author, message) VALUES ('ja', 'komment');
