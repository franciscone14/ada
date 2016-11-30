DROP SCHEMA IF EXISTS ada;
CREATE DATABASE ada;
ALTER SCHEMA `ada`  DEFAULT COLLATE utf8_unicode_ci ;
USE ada;

CREATE TABLE login(
	idLogin INT(11) NOT NULL UNIQUE AUTO_INCREMENT,
	emailLogin VARCHAR(45) NOT NULL UNIQUE,
	codLogin VARCHAR(20) NOT NULL UNIQUE,
	tipoLogin CHAR(1) NOT NULL,
	senhaLogin VARCHAR(40) NOT NULL,
	CONSTRAINT pkLogin
		PRIMARY KEY(idLogin)
);

CREATE TABLE endereco (
  	idEnd INT(11) NOT NULL UNIQUE AUTO_INCREMENT,
  	ruaEnd VARCHAR(45) DEFAULT NULL,
  	bairroEnd VARCHAR(45) DEFAULT NULL,
  	complementoEnd VARCHAR(45) DEFAULT NULL,
  	cepEnd VARCHAR(10) NOT NULL,
	estadoEnd VARCHAR(2) NOT NULL,
	cidadeEnd VARCHAR(45) NOT NULL,
  	numeroEnd int(11) DEFAULT NULL,
  	CONSTRAINT  
  		PRIMARY KEY(idEnd)
);

CREATE TABLE instituicao (
	idInst INT(11) NOT NULL UNIQUE AUTO_INCREMENT,
	nomeInst VARCHAR(60) NOT NULL,
	cnpjInst VARCHAR(20) NOT NULL UNIQUE,
	facebookInst VARCHAR(45) NULL DEFAULT NULL,
	twitterInst VARCHAR(45) NULL DEFAULT NULL,
	instagramInst VARCHAR(45) NULL DEFAULT NULL,
	foneInst VARCHAR(15) NULL DEFAULT NULL,
	celularInst VARCHAR(15) NULL DEFAULT NULL,
	modeloBoletimInst INT(3) NOT NULL,
	brasaoInst VARCHAR(30) NULL DEFAULT NULL,
	idEndInst INT(11) NOT NULL UNIQUE,
	CONSTRAINT pkInst 
		PRIMARY KEY (idInst),
	CONSTRAINT fkEndInst
		FOREIGN KEY(idEndInst) 
		REFERENCES endereco(idEnd)
);

CREATE TABLE usuario(
	idUser INT(11) NOT NULL AUTO_INCREMENT UNIQUE,
	nomeUser VARCHAR(60) NOT NULL,
	dataNascUser DATE NOT NULL,
	cpfUser VARCHAR(15) NOT NULL UNIQUE,
	rgUser VARCHAR(15) NOT NULL UNIQUE,
	foneUser VARCHAR(15) NULL DEFAULT NULL,
	celularUser VARCHAR(15) NULL DEFAULT NULL,
	sexoUser CHAR(1) NOT NULL,
	imagemUser VARCHAR(30) NULL DEFAULT NULL,
	idLoginUser INT(11) NOT NULL UNIQUE,
	idInstUser INT(11),
	idEndUser INT(11) NOT NULL UNIQUE,
	CONSTRAINT pkUser 
		PRIMARY KEY (idUser) ,
	CONSTRAINT fkInstUser
		FOREIGN KEY (idInstUser)
		REFERENCES instituicao (idInst),
	CONSTRAINT fkEndUser
		FOREIGN KEY (idEndUser)
		REFERENCES endereco(idEnd),
	CONSTRAINT fkLoginUser
		FOREIGN KEY(idLoginUser) 
		REFERENCES login(idLogin)
);

CREATE TABLE disciplinas (
	idDisc INT(11) NOT NULL AUTO_INCREMENT UNIQUE,
	nomeDisc VARCHAR(45) NOT NULL,
	CONSTRAINT pkDisc 
		PRIMARY KEY (idDisc)
);

CREATE TABLE grades (
    idGrade INT NOT NULL UNIQUE AUTO_INCREMENT,
    anoGrade INT(4),
    descricaoGrade VARCHAR(45),
    tipoGrade INT(1),
    CONSTRAINT pkGrade
        PRIMARY KEY (idGrade)
);

CREATE TABLE grades_disciplinas(
    idGrade INT NOT NULL,
    idDisc INT NOT NULL,
    CONSTRAINT fkGrades
            FOREIGN KEY (idGrade)
            REFERENCES grades(idGrade),
    CONSTRAINT fkGradeDisc
            FOREIGN KEY (idDisc)
            REFERENCES disciplinas(idDisc)
);
		
CREATE TABLE turmas (
	idTurma INT(11) NOT NULL AUTO_INCREMENT UNIQUE,
	descricaoTurma VARCHAR(40) NOT NULL,
	serieTurma INT(2) NOT NULL,
	turnoTurma VARCHAR(15) NOT NULL,
	salaTurma VARCHAR(15) NOT NULL,
        idGradeTurma INT NOT NULL,
	CONSTRAINT pkTurma
		PRIMARY KEY (idTurma),
        CONSTRAINT fkGradeTurma
            FOREIGN KEY (idGradeTurma)
            REFERENCES grades(idGrade)
);

CREATE TABLE aluno (
	idAluno INT(11) NOT NULL UNIQUE AUTO_INCREMENT,
	idUserAluno INT(11) NOT NULL UNIQUE,
	nomeMaeAluno VARCHAR(60) NULL DEFAULT NULL,
	nomePaiAluno VARCHAR(60) NULL DEFAULT NULL,
	anoIngressoAluno INT(4) NOT NULL,
	idTurmaAluno INT(11) NOT NULL,
	CONSTRAINT pkAluno 
		PRIMARY KEY (idAluno) ,
	CONSTRAINT fkUserAluno
		FOREIGN KEY (idUserAluno)
		REFERENCES usuario (idUser),
	CONSTRAINT fkTurmaAluno
		FOREIGN KEY (idTurmaAluno)
		REFERENCES turmas (idTurma)
);

CREATE TABLE aluno_estuda_em (
	idAluno INT(11) NOT NULL,
	idDiscAlu INT(11) NOT NULL,
	CONSTRAINT fkMatricula
		FOREIGN KEY (idAluno)
		REFERENCES aluno(idAluno),
	CONSTRAINT fkIdDiscAlu
		FOREIGN KEY (idDiscAlu)
		REFERENCES disciplinas(idDisc)
);

CREATE TABLE avaliacoes (
	idAva INT(11) NOT NULL AUTO_INCREMENT UNIQUE,
	descricaoAva VARCHAR(45) NOT NULL,
	tipoAva VARCHAR(30) NOT NULL,
	pesoAva INT(2) NOT NULL,
	dataAva DATE NOT NULL,
	obsAva VARCHAR(60) NULL DEFAULT NULL,
	idDiscAva INT(11) NOT NULL,
	CONSTRAINT pkAva
		PRIMARY KEY (idAva),
	CONSTRAINT fkAvaliacoes
		FOREIGN KEY (idDiscAva)
		REFERENCES disciplinas (idDisc)
);

CREATE TABLE aluno_avaliacoes (
	idNota INT(11) NOT NULL AUTO_INCREMENT UNIQUE,
	idAlunoAva INT(11) NOT NULL,
	idNotaAva INT(11) NOT NULL,
	valorNota FLOAT(2,2) NULL DEFAULT NULL,
	ObservacaoNota VARCHAR(60) NULL DEFAULT NULL,
	
	CONSTRAINT pkNota	
		PRIMARY KEY (idNota),
	CONSTRAINT fkidAluno
		FOREIGN KEY (idAlunoAva)
		REFERENCES aluno (idAluno),
	CONSTRAINT fkNotaAva
		FOREIGN KEY (idNotaAva)
		REFERENCES avaliacoes (idAva)
);

CREATE TABLE frequencia (
	idFreq INT(11) NOT NULL AUTO_INCREMENT UNIQUE,
	contProgFreq VARCHAR(60) NOT NULL,
	dataFreq DATE NOT NULL,
	CONSTRAINT pkFreq 
		PRIMARY KEY (idFreq)
);

CREATE TABLE freq_aluno (
	idAluno INT(11) NOT NULL,
	idFreq INT(11) NOT NULL,
	presenca TINYINT(1) NULL DEFAULT NULL,
	CONSTRAINT fkIdFreq
		FOREIGN KEY (idFreq)
		REFERENCES frequencia (idFreq),
	CONSTRAINT fkidAlunoFreq
		FOREIGN KEY (idAluno)
		REFERENCES aluno (idAluno)
);

CREATE TABLE professor (
	idProf INT(11) NOT NULL UNIQUE AUTO_INCREMENT,
	idUserProf INT(11) NOT NULL UNIQUE,
	dataAdmissaoProf DATE NOT NULL,
	CONSTRAINT pkProf 
		PRIMARY KEY (idProf) ,
	CONSTRAINT fkProfessor
		FOREIGN KEY (idUserProf)
		REFERENCES usuario (idUser)
);

CREATE TABLE leciona_em (
	idTurma INT(11) NOT NULL,
	idProf INT(11) NOT NULL,
	idDisc INT(11) NOT NULL,
	CONSTRAINT fkLeciona_emProf
		FOREIGN KEY (idProf)
		REFERENCES professor (idProf),
	CONSTRAINT fkLeciona_emTurma
		FOREIGN KEY (idTurma)
		REFERENCES turmas(idTurma),
	CONSTRAINT fkLeciona_emDisc
		FOREIGN KEY (idDisc)
		REFERENCES disciplinas(idDisc)
);

