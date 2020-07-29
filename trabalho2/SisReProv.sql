
CREATE DATABASE SisReProv ;

USE SisReProv
CREATE TABLE questao (
    assunto character varying(255) NOT NULL,
    idquestao integer NOT NULL,
	descricao character varying(1000) NOT NULL,
	tipo char(20) NOT NULL,
	imagem ,
	peso numeric NOT NULL,
	cpf char(11) NOT NULL
    CONSTRAINT questao_idquestao_check CHECK ((idquestao > 0))
);

CREATE TABLE professor (
    nome character varying(255),
    cpf char(11) NOT NULL,
    datanasc date,
    email character varying(255),
	senha character varying(255) NOT NULL
);

CREATE TABLE prova (
    idprova integer NOT NULL,
	tipodeprova char(2) DEFAULT 'PB',
	CONSTRAINT prova_tipodeprova_check CHECK ((tipodeprova = ANY (ARRAY['PB'::bpchar, 'PV'::bpchar])))
);
CREATE TABLE gabarito (
    idquestao integer NOT NULL,
	resposta character varying(500) NOT NULL
	
);

CREATE TABLE historicodecopia (
    idprova integer NOT NULL,
	cpf char(11) NOT NULL,
	datacopia date
);
CREATE TABLE provaquestoes (
    idprova integer NOT NULL,
	idsubitem integer NOT NULL
	
);

CREATE TABLE subitens (
    idquestao integer NOT NULL,
	idsubitem integer NOT NULL,
	descricao character varying(1000) NOT NULL
	
);

-- referenciando  chaves 
--PK

ALTER TABLE ONLY questao
    ADD CONSTRAINT questao_pkey PRIMARY KEY (idquestao);
	
ALTER TABLE ONLY professor
    ADD CONSTRAINT professor_pkey PRIMARY KEY (cpf);

ALTER TABLE ONLY prova
    ADD CONSTRAINT prova_pkey PRIMARY KEY (idprova);	

ALTER TABLE ONLY gabarito
    ADD CONSTRAINT gabarito_pkey PRIMARY KEY (idquestao);	

ALTER TABLE ONLY historicodecopia
    ADD CONSTRAINT historicodecopia_pkey PRIMARY KEY (idprova, cpf);
	
ALTER TABLE ONLY provaquestoes
    ADD CONSTRAINT provaquestoes_pkey PRIMARY KEY (idprova, idquestao);
	
ALTER TABLE ONLY subitens
    ADD CONSTRAINT subitens_pkey PRIMARY KEY (idquestao, idsubitem);
	
--FK
ALTER TABLE ONLY questao
    ADD CONSTRAINT cpfprofessor FOREIGN KEY (cpf) REFERENCES professor(cpf);		
	
ALTER TABLE ONLY gabarito
    ADD CONSTRAINT idquestao FOREIGN KEY (idquestao) REFERENCES questao(idquestao);	
	
ALTER TABLE ONLY historicodecopia
    ADD CONSTRAINT historicodecopiaprova FOREIGN KEY (idprova) REFERENCES prova(idprova);

ALTER TABLE ONLY historicodecopia
    ADD CONSTRAINT historicodecopiaprof  FOREIGN KEY (cpf) REFERENCES professor(cpf);	
	
ALTER TABLE ONLY subitens
    ADD CONSTRAINT subitensquestao FOREIGN KEY (idquestao) REFERENCES questao(idquestao);

	

	
