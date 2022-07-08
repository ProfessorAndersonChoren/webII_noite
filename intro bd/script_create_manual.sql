create database if not exists escola;
use escola;
create table if not exists responsavel_financeiro(
	codigo_responsavel_financeiro int auto_increment,
    nome varchar(50) not null,
    cpf char(14) not null unique key,
	primary key(codigo_responsavel_financeiro)
);
create table if not exists turmas(
	codigo_turma int,
    filial tinyint not null,
    turno char(1) not null,
    primary key(codigo_turma)
);
create table if not exists alunos(
	ra int,
    nome varchar(50) not null,
    genero char(1) null,
    rua varchar(60) not null,
    numero varchar(10) not null,
    bairro varchar(50) not null,
    cidade varchar(40) not null,
    codigo_responsavel int null,
    codigo_turma int not null,
    constraint fk_responsavel_financeiro foreign key (codigo_responsavel) references responsavel_financeiro(codigo_responsavel_financeiro),
    constraint fk_alunos_turmas foreign key (codigo_turma) references turmas(codigo_turma)
);
create table if not exists professores(
	chapa varchar(8),
    nome varchar(50) not null,
    primary key(chapa)
);
create table if not exists especialidades(
	codigo_especialidade smallint auto_increment,
    titulacao varchar(30) not null,
    primary key (codigo_especialidade)
);
create table  if not exists disciplinas(
	codigo_turma int,
    codigo_professor varchar(8),
    sala char(3) not null,
    primary key (codigo_turma,codigo_professor),
    constraint fk_disciplina_turma foreign key (codigo_turma) references turmas(codigo_turma),
    constraint fk_disciplina_professor foreign key (codigo_professor) references professores(chapa)
);
create table if not exists professores_especialidades(
	professores_chapa varchar(8),
    codigo_especialidade smallint,
    primary key(professores_chapa,codigo_especialidade),
    foreign key (professores_chapa) references professores(chapa),
    foreign key (codigo_especialidade) references especialidades(codigo_especialidade)
);