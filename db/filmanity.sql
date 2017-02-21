drop table peliculas cascade;
create table peliculas (
  id       bigserial    constraint pk_peliculas primary key,
  titulo   varchar(100) not null,
  ano      numeric(4),
  duracion numeric(3),
  sinopsis text,
  cartel   text
);

create index idx_peliculas_titulo on peliculas (titulo);
create index idx_peliculas_ano on peliculas (ano);
