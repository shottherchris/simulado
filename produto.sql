
create table produto(
    id serial primary key,
    nome varchar(50) not null,
    descricao varchar(255),
    preco numeric(10,2) not null,
    quantidade integer not null default 0,
    categoria varchar(30)
);
