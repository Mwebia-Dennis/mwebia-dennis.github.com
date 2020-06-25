

create table users(
    id int AUTO_INCREMENT PRIMARY KEY,
    f_name varchar(100) not null,
    l_name varchar(100) not null,
    user_name varchar(100) not null,
    email varchar(150) not null,
    password varchar(350) not null,
    gender varchar() not null,
    age varchar(50) not null,
    date_added TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

DESCRIBE users;

CREATE TABLE user_relationships(
    id int AUTO_INCREMENT PRIMARY KEY,
    user_id int not null,
    partner_id int not null,
    date_added TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    type_of_relationship varchar not null,
    FOREIGN KEY (user_id) REFERENCES users(id),
    FOREIGN KEY (partner_id) REFERENCES users(id)
);

describe user_relationships;

create table following(
    id int AUTO_INCREMENT PRIMARY KEY,
    user_id int not null,
    following_id int not null,
    date_added TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES users(id),
    FOREIGN KEY (following_id) REFERENCES users(id)
);

describe following;










