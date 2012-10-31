-- DELETE
delete from users;
delete from parties;
delete from addresses;

-- USER
INSERT INTO users(id, name, surname, birthday, username, password, date_register, date_last_con, email, created_at, updated_at) VALUES (1, "My name 1", "My surname 1", "2012-10-01 11:42:03", "My username 1", "password1", "2012-10-01 11:42:03", "2012-10-16 11:42:03", "email1@email.com", "2012-10-16 11:42:03", "2012-10-16 11:42:03");
INSERT INTO users(id, name, surname, birthday, username, password, date_register, date_last_con, email, created_at, updated_at) VALUES (2, "My name 2", "My surname 2", "2012-10-02 11:42:03", "My username 2", "password2", "2012-10-02 11:42:03", "2012-10-16 11:42:03", "email2@email.com", "2012-10-16 11:42:03", "2012-10-16 11:42:03");
INSERT INTO users(id, name, surname, birthday, username, password, date_register, date_last_con, email, created_at, updated_at) VALUES (3, "My name 3", "My surname 3", "2012-10-03 11:42:03", "My username 3", "password3", "2012-10-03 11:42:03", "2012-10-16 11:42:03", "email3@email.com", "2012-10-16 11:42:03", "2012-10-16 11:42:03");

-- ADDRESS
INSERT INTO addresses(id, country, str_name, str_no, cp, city, party_id, created_at, updated_at) VALUES (1, "BE", "My street name 1", "My street no 1", "01", "My city 1", 1, now(), now());
INSERT INTO addresses(id, country, str_name, str_no, cp, city, party_id, created_at, updated_at) VALUES (2, "FR", "My street name 2", "My street no 2", "02", "My city 2", 2, now(), now());
INSERT INTO addresses(id, country, str_name, str_no, cp, city, party_id, created_at, updated_at) VALUES (3, "DE", "My street name 3", "My street no 3", "03", "My city 3", 3, now(), now());

-- PARTY
INSERT INTO parties(id, description, starting_date, ending_date, max_place, user_id, address_id, created_at, updated_at) VALUES (1, "My description 1", now(), now(), 11, 1, 1, now(), now());
INSERT INTO parties(id, description, starting_date, ending_date, max_place, user_id, address_id, created_at, updated_at) VALUES (2, "My description 2", now(), now(), 12, 2, 2, now(), now());
INSERT INTO parties(id, description, starting_date, ending_date, max_place, user_id, address_id, created_at, updated_at) VALUES (3, "My description 3", now(), now(), 13, 3, 3, now(), now());