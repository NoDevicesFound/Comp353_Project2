DROP TABLE IF EXISTS User;
CREATE TABLE User (
    uid int not null unique,
    fname char(20),
    lname char(20),
    dob DATE,
    email char(50),
    password char(20)
);

DROP TABLE IF EXISTS EventManager;
CREATE TABLE EventManager (
    uid int,
    address char(150),
    debit int,
    phone int,
    FOREIGN KEY (uid) REFERENCES User(uid)
);

DROP TABLE IF EXISTS Admin;
CREATE TABLE Admin (
    aid int,
    FOREIGN KEY (aid) REFERENCES User(uid)
);

DROP TABLE IF EXISTS Event;
CREATE TABLE Event (
    eid int not null unique,
    type char(20),
    lifetime int,
    date DATE,
    status bool,
    discount int
);

DROP TABLE IF EXISTS Group;
CREATE TABLE Group (
    gid int not null unique,
    owner int,
    eid int,
    FOREIGN KEY (owner) REFERENCES User(uid),
    FOREIGN KEY (eid) REFERENCES Event(eid)
);

DROP TABLE IF EXISTS Comment;
CREATE TABLE Comment (
    cid int not null unique,
    permissions char(1),
    contents char(250),
    author int,
    FOREIGN KEY (author) REFERENCES User(uid)
);

DROP TABLE IF EXISTS PartOfEvent;
CREATE TABLE PartOfEvent(
    eid int,
    uid int,
    FOREIGN KEY (eid) REFERENCES Event(eid),
    FOREIGN KEY (uid) REFERENCES User(uid)
);

DROP TABLE IF EXISTS PartOfGroup;
CREATE TABLE PartOfGroup(
    gid int,
    uid int,
    FOREIGN KEY (gid) REFERENCES Group(gid),
    FOREIGN KEY (uid) REFERENCES User(uid)
);

DROP TABLE IF EXISTS CommentsOnEvent;
CREATE TABLE CommentsOnEvent (
    eid int,
    cid int,
    FOREIGN KEY (eid) REFERENCES Event(eid),
    FOREIGN KEY (cid) REFERENCES Comment(cid)
);

DROP TABLE IF EXISTS CommentsOnGroup;
CREATE TABLE CommentsOnGroup (
    gid int,
    cid int,
    FOREIGN KEY (gid) REFERENCES Group(gid),
    FOREIGN KEY (cid) REFERENCES Comment(cid)
);