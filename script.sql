CREATE TABLE t_cliente
(
    codigo int not null,
    nome varchar(20) not null,
    email varchar(20) not null,    
    cidade varchar(20) not null
);
create generator vll;
set term !! ;
CREATE TRIGGER TESTE_SEQ_AUTO FOR t_cliente
ACTIVE BEFORE INSERT POSITION 0
AS
BEGIN
if (new.codigo is null) then
NEW.codigo = gen_id(vll,1);
END!!
set term ; !!
commit;

INSERT INTO T_CLIENTE (NOME, EMAIL, CIDADE)
VALUES (
    'cleber', 
    'cleber@gmail.com', 
    'são paulo'
);
INSERT INTO T_CLIENTE (NOME, EMAIL, CIDADE)
VALUES (
    'andré',
    'andré@gmail.com',
    'são paulo'
);