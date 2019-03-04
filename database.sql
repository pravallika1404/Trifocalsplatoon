CREATE TABLE user (
    id int(11) not null PRIMARY KEY AUTO_INCREMENT,
    uname varchar(250) not null,
    rollno varchar(15) not null,
    pass varchar(50) not null,
    cgpa float(10) not null,
    email varchar(200) not null,
    pnumber int(15) not null,
    department varchar(20) not null
);
CREATE TABLE usercompany(
    id int(11) not null PRIMARY KEY AUTO_INCREMENT,
    uid int(11) not null,
    uname varchar(250) not null,
    cname varchar(250),
    profile varchar(250),
    sdate date,
    edate date
);
CREATE TABLE userskill(
    id int(11) not null PRIMARY KEY AUTO_INCREMENT,
    uid int(11) not null,
    uname varchar(250) not null,
    skill1 varchar(250),
    skill2 varchar(250),
    skill3 varchar(250),
    skill4 varchar(250),
    skill5 varchar(250),
    skill6 varchar(250)
);

CREATE TABLE company (
    id int(11) not null PRIMARY KEY AUTO_INCREMENT,
    name varchar(250) not null,
    cutoff varchar(50) not null,
    skill1 varchar(250),
    skill2 varchar(250),
    skill3 varchar(250),
    skill4 varchar(250),
    skill5 varchar(250),
    skill6 varchar(250)
);
