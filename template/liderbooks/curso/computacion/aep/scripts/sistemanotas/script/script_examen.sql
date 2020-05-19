CREATE TABLE public.alumnos ( 
	alu_id  	int4 NOT NULL DEFAULT nextval('public.alumnos_alu_id_seq'::text),
	alu_pat 	varchar(30) NOT NULL,
	alu_mat 	varchar(30) NOT NULL,
	alu_nom 	varchar(30) NOT NULL,
	alu_fna 	date NOT NULL,
	alu_tel 	varchar(20) NULL,
	alu_dir 	varchar(50) NULL,
	alu_mail	varchar(50) NOT NULL 
	)
GO
CREATE TABLE public.cursos ( 
	cursos_id 	int4 NOT NULL DEFAULT nextval('public.cursos_cursos_id_seq'::text),
	cursos_cod	varchar(5) NOT NULL,
	cursos_nom	varchar(30) NOT NULL 
	)
GO
CREATE TABLE public.cursos_notas ( 
	curno_id     	int4 NOT NULL DEFAULT nextval('public.cursos_notas_curno_id_seq'::text),
	curno_cur    	int4 NOT NULL,
	curno_alu    	int4 NOT NULL,
	curno_n1     	int4 NOT NULL DEFAULT 0,
	curno_n2     	int4 NOT NULL DEFAULT 0,
	curno_n3     	int4 NOT NULL DEFAULT 0,
	curno_n4     	int4 NOT NULL DEFAULT 0,
	curno_cond   	varchar(-5) NOT NULL DEFAULT 'DESAPROBADO'::character varying,
	curno_enviado	bool NOT NULL DEFAULT false 
	)
GO
CREATE TABLE public.usuarios ( 
	user_idid	int4 NOT NULL DEFAULT nextval('"public"."usuarios_user_idid_seq"'::text),
	user_cod 	varchar(4) NOT NULL DEFAULT 'U000'::character varying,
	user_nom 	varchar(30) NOT NULL DEFAULT '-'::character varying 
	)
GO
CREATE VIEW public.rep_notas
AS
SELECT cursos.cursos_id, cursos.cursos_nom, alumnos.alu_id, alumnos.alu_pat, alumnos.alu_mat, alumnos.alu_nom, alumnos.alu_mail, cursos_notas.curno_n1, cursos_notas.curno_n2, cursos_notas.curno_n3, cursos_notas.curno_n4, cursos_notas.curno_cond, cursos_notas.curno_enviado FROM ((cursos JOIN cursos_notas ON ((cursos.cursos_id = cursos_notas.curno_cur))) JOIN alumnos ON ((cursos_notas.curno_alu = alumnos.alu_id)));
GO
CREATE SEQUENCE public.usuarios_id_seq
GO
CREATE SEQUENCE public.cursos_cursos_id_seq
GO
CREATE SEQUENCE public.alumnos_alu_id_seq
GO
CREATE SEQUENCE public.usuarios_user_idid_seq
GO
CREATE SEQUENCE public.cursos_notas_curno_id_seq
GO
CREATE UNIQUE INDEX alumnos_pkey
	ON public.alumnos(alu_id)
GO
CREATE UNIQUE INDEX alumnos_idx
	ON public.alumnos(alu_pat, alu_mat, alu_nom)
GO
CREATE UNIQUE INDEX cursos_cursos_id_key
	ON public.cursos(cursos_id)
GO
CREATE UNIQUE INDEX cursos_cursos_cod_key
	ON public.cursos(cursos_cod)
GO
CREATE UNIQUE INDEX cursos_curso_nom_key
	ON public.cursos(cursos_nom)
GO
CREATE UNIQUE INDEX cursos_notas_pkey
	ON public.cursos_notas(curno_id)
GO
CREATE UNIQUE INDEX usuarios_pkey
	ON public.usuarios(user_idid)
GO
ALTER TABLE public.alumnos
	ADD CONSTRAINT alumnos_pkey
	PRIMARY KEY (alu_id)
GO
ALTER TABLE public.cursos
	ADD CONSTRAINT cursos_cursos_cod_key
	UNIQUE (cursos_cod)
GO
ALTER TABLE public.cursos
	ADD CONSTRAINT cursos_curso_nom_key
	UNIQUE (cursos_nom)
GO
ALTER TABLE public.cursos_notas
	ADD CONSTRAINT cursos_notas_pkey
	PRIMARY KEY (curno_id)
GO
ALTER TABLE public.cursos_notas
	ADD CONSTRAINT cursos_notas_fk
	FOREIGN KEY(curno_cur)
	REFERENCES public.cursos(cursos_id)
GO
ALTER TABLE public.cursos_notas
	ADD CONSTRAINT cursos_notas_fk1
	FOREIGN KEY(curno_alu)
	REFERENCES public.alumnos(alu_id)
GO
ALTER TABLE public.usuarios
	ADD CONSTRAINT usuarios_pkey
	PRIMARY KEY (user_idid)
GO