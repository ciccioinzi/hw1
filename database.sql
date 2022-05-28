
CREATE TABLE users (
    id integer primary key auto_increment,
    nome varchar(255) not null,
    cognome varchar(255) not null,
    username varchar(16) not null unique,
	email varchar(255) not null unique,
    password varchar(255) not null
) Engine = InnoDB;

CREATE TABLE contents (
	id int primary key auto_increment,
	titolo varchar(255),
    img varchar(255),
    descrizione varchar(255)
) Engine = InnoDB;

CREATE TABLE preferiti (
	userid integer,
    id varchar(255),
    img varchar(255),
    titolo varchar(255),
    artista varchar(255),
    index idx_userid(userid),
    foreign key(userid) references users(id),
    primary key(userid, id)
) Engine = InnoDB;