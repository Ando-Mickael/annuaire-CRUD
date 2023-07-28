create table personne (
    id serial primary key,
    nom varchar(255),
    email varchar(255) unique,
    numero varchar(255) unique
);