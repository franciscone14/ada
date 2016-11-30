insert into login(idLogin,emailLogin,codLogin,senhaLogin) values (1,'instituicao@inst.com','201515TIISUB0010','123456789');

insert into endereco(idEnd,ruaEnd,bairroEnd,complementoEnd,cepEnd,estadoEnd,cidadeEnd,numeroEnd) values (1,'Rua 1','Bairro 1','Intituição','30.500-800','MG','Divinópolis',1000);

insert into instituicao(idInst,nomeInst,cnpjInst,facebookInst,twitterInst,instagramInst,foneInst,celularInst,modeloBoletimInst,brasaoInst,idEndInst) 
values (1,'CEFET','20.589.654/7525-63','faceinst@inst.com','twitterinst@inst.com','instagraminst@inst.com','(37) 3214-5892','(37) 98854-5689',0,NULL,1);

insert into grades(idGrade,anoGrade,descricaoGrade,tipoGrade) values (1,2014,'Informatica Para Internet',3);
insert into grades(idGrade,anoGrade,descricaoGrade,tipoGrade) values (2,2015,'Informatica Para Internet',3);

insert into grades(idGrade,anoGrade,descricaoGrade,tipoGrade) values (3,2014,'Produção de Moda',3);
insert into grades(idGrade,anoGrade,descricaoGrade,tipoGrade) values (4,2015,'Produção de Moda',3);

insert into grades(idGrade,anoGrade,descricaoGrade,tipoGrade) values (5,2014,'Engenharia Mecatrônica',4);
insert into grades(idGrade,anoGrade,descricaoGrade,tipoGrade) values (6,2015,'Engenharia Mecatrônica',4);
insert into grades(idGrade,anoGrade,descricaoGrade,tipoGrade) values (7,2016,'Engenharia Mecatrônica',4);
insert into grades(idGrade,anoGrade,descricaoGrade,tipoGrade) values (8,2017,'Engenharia Mecatrônica',4);
insert into grades(idGrade,anoGrade,descricaoGrade,tipoGrade) values (9,2018,'Engenharia Mecatrônica',4);

insert into grades(idGrade,anoGrade,descricaoGrade,tipoGrade) values (10,2014,'Eletromecânica',3);
insert into grades(idGrade,anoGrade,descricaoGrade,tipoGrade) values (11,2015,'Eletromecânica',3);

insert into grades(idGrade,anoGrade,descricaoGrade,tipoGrade) values (12,2014,'Informática',3);
insert into grades(idGrade,anoGrade,descricaoGrade,tipoGrade) values (13,2015,'Informática',3);
insert into grades(idGrade,anoGrade,descricaoGrade,tipoGrade) values (14,2015,'Informática',3);

insert into grades(idGrade,anoGrade,descricaoGrade,tipoGrade) values (15,2015,'Arquitetura',4);
insert into grades(idGrade,anoGrade,descricaoGrade,tipoGrade) values (16,2016,'Arquitetura',4);
insert into grades(idGrade,anoGrade,descricaoGrade,tipoGrade) values (17,2017,'Arquitetura',4);
insert into grades(idGrade,anoGrade,descricaoGrade,tipoGrade) values (18,2018,'Arquitetura',4);
insert into grades(idGrade,anoGrade,descricaoGrade,tipoGrade) values (19,2019,'Arquitetura',4);

insert into grades(idGrade,anoGrade,descricaoGrade,tipoGrade) values (20,2015,'Engenharia Quimica',4);
insert into grades(idGrade,anoGrade,descricaoGrade,tipoGrade) values (21,2016,'Engenharia Quimica',4);
insert into grades(idGrade,anoGrade,descricaoGrade,tipoGrade) values (22,2017,'Engenharia Quimica',4);
insert into grades(idGrade,anoGrade,descricaoGrade,tipoGrade) values (23,2018,'Engenharia Quimica',4);

insert into grades(idGrade,anoGrade,descricaoGrade,tipoGrade) values (24,2015,'Engenharia da Computação',4);
insert into grades(idGrade,anoGrade,descricaoGrade,tipoGrade) values (25,2016,'Engenharia da Computação',4);
insert into grades(idGrade,anoGrade,descricaoGrade,tipoGrade) values (26,2017,'Engenharia da Computação',4);
insert into grades(idGrade,anoGrade,descricaoGrade,tipoGrade) values (27,2018,'Engenharia da Computação',4);
insert into grades(idGrade,anoGrade,descricaoGrade,tipoGrade) values (28,2019,'Engenharia da Computação',4);

insert into turmas(idTurma,descricaoTurma,serieTurma,turnoTurma,salaTurma,idGradeTurma) values (1,'A Informatica Para Internet',1,'Noturno','100',1);
insert into turmas(idTurma,descricaoTurma,serieTurma,turnoTurma,salaTurma,idGradeTurma) values (2,'B Informatica Para Internet',2,'Noturno','101',2);

insert into turmas(idTurma,descricaoTurma,serieTurma,turnoTurma,salaTurma,idGradeTurma) values (3,'A Produção de Moda',1,'Noturno','103',3);
insert into turmas(idTurma,descricaoTurma,serieTurma,turnoTurma,salaTurma,idGradeTurma) values (4,'B Produção de Moda',2,'Noturno','104',4);

insert into turmas(idTurma,descricaoTurma,serieTurma,turnoTurma,salaTurma,idGradeTurma) values (5,'A Engenharia Mecatrônica',1,'Diurno','105',5);
insert into turmas(idTurma,descricaoTurma,serieTurma,turnoTurma,salaTurma,idGradeTurma) values (6,'B Engenharia Mecatrônica',2,'Diurno','106',6);
insert into turmas(idTurma,descricaoTurma,serieTurma,turnoTurma,salaTurma,idGradeTurma) values (7,'C Engenharia Mecatrônica',3,'Diurno','107',7);
insert into turmas(idTurma,descricaoTurma,serieTurma,turnoTurma,salaTurma,idGradeTurma) values (8,'D Engenharia Mecatrônica',4,'Diurno','108',8);
insert into turmas(idTurma,descricaoTurma,serieTurma,turnoTurma,salaTurma,idGradeTurma) values (9,'E Engenharia Mecatrônica',5,'Diurno','109',9);

insert into turmas(idTurma,descricaoTurma,serieTurma,turnoTurma,salaTurma,idGradeTurma) values (10,'A Eletromecânica',1,'Noturno','110',10);
insert into turmas(idTurma,descricaoTurma,serieTurma,turnoTurma,salaTurma,idGradeTurma) values (11,'B Eletromecânica',2,'Noturno','111',11);

insert into turmas(idTurma,descricaoTurma,serieTurma,turnoTurma,salaTurma,idGradeTurma) values (12,'A Informática',1,'Diurno','112',12);
insert into turmas(idTurma,descricaoTurma,serieTurma,turnoTurma,salaTurma,idGradeTurma) values (13,'B Informática',2,'Diurno','113',13);
insert into turmas(idTurma,descricaoTurma,serieTurma,turnoTurma,salaTurma,idGradeTurma) values (14,'C Informática',3,'Diurno','114',14);

insert into turmas(idTurma,descricaoTurma,serieTurma,turnoTurma,salaTurma,idGradeTurma) values (15,'A Arquitetura',1,'Diurno','115',15);
insert into turmas(idTurma,descricaoTurma,serieTurma,turnoTurma,salaTurma,idGradeTurma) values (16,'B Arquitetura',2,'Diurno','116',16);
insert into turmas(idTurma,descricaoTurma,serieTurma,turnoTurma,salaTurma,idGradeTurma) values (17,'C Arquitetura',3,'Diurno','117',17);
insert into turmas(idTurma,descricaoTurma,serieTurma,turnoTurma,salaTurma,idGradeTurma) values (18,'D Arquitetura',4,'Diurno','118',18);
insert into turmas(idTurma,descricaoTurma,serieTurma,turnoTurma,salaTurma,idGradeTurma) values (19,'E Arquitetura',5,'Diurno','119',19);

insert into turmas(idTurma,descricaoTurma,serieTurma,turnoTurma,salaTurma,idGradeTurma) values (20,'A Engenharia Quimica',1,'Diurno','120',20);
insert into turmas(idTurma,descricaoTurma,serieTurma,turnoTurma,salaTurma,idGradeTurma) values (21,'B Engenharia Quimica',2,'Diurno','121',21);
insert into turmas(idTurma,descricaoTurma,serieTurma,turnoTurma,salaTurma,idGradeTurma) values (22,'C Engenharia Quimica',3,'Diurno','122',22);
insert into turmas(idTurma,descricaoTurma,serieTurma,turnoTurma,salaTurma,idGradeTurma) values (23,'D Engenharia Quimica',4,'Diurno','123',23);

insert into turmas(idTurma,descricaoTurma,serieTurma,turnoTurma,salaTurma,idGradeTurma) values (24,'A Engenharia da Computação',1,'Diurno','124',24);
insert into turmas(idTurma,descricaoTurma,serieTurma,turnoTurma,salaTurma,idGradeTurma) values (25,'B Engenharia da Computação',2,'Diurno','125',25);
insert into turmas(idTurma,descricaoTurma,serieTurma,turnoTurma,salaTurma,idGradeTurma) values (26,'C Engenharia da Computação',3,'Diurno','126',26);
insert into turmas(idTurma,descricaoTurma,serieTurma,turnoTurma,salaTurma,idGradeTurma) values (27,'D Engenharia da Computação',4,'Diurno','127',27);
insert into turmas(idTurma,descricaoTurma,serieTurma,turnoTurma,salaTurma,idGradeTurma) values (28,'E Engenharia da Computação',5,'Diurno','128',28);


insert into disciplinas(idDisc,nomeDisc) values (1,'Banco de Dados');
insert into disciplinas(idDisc,nomeDisc) values (2,'Linguagem de Programação I');
insert into disciplinas(idDisc,nomeDisc) values (3,'Linguagem de Programação II');
insert into disciplinas(idDisc,nomeDisc) values (4,'Gestão e Empreendorismo');
insert into disciplinas(idDisc,nomeDisc) values (5,'Tecnologia da Informação');
insert into disciplinas(idDisc,nomeDisc) values (6,'Ingles Tecnico');
insert into disciplinas(idDisc,nomeDisc) values (7,'Português Tecnico');
insert into disciplinas(idDisc,nomeDisc) values (8,'Projeto de Sistemas');	
insert into disciplinas(idDisc,nomeDisc) values (9,'Artes');
insert into disciplinas(idDisc,nomeDisc) values (10,'Educação Física');
insert into disciplinas(idDisc,nomeDisc) values (11,'Língua Portuguesa');
insert into disciplinas(idDisc,nomeDisc) values (13,'Prática de Redação');
insert into disciplinas(idDisc,nomeDisc) values (14,'Biologia');
insert into disciplinas(idDisc,nomeDisc) values (15,'Física');
insert into disciplinas(idDisc,nomeDisc) values (16,'Matemática');
insert into disciplinas(idDisc,nomeDisc) values (17,'Química');









						
