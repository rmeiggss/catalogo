--
-- PostgreSQL database dump
--

-- Started on 2007-03-12 16:48:51

SET client_encoding = 'SQL_ASCII';
SET standard_conforming_strings = off;
SET check_function_bodies = false;
SET client_min_messages = warning;
SET escape_string_warning = off;

--
-- TOC entry 1631 (class 1262 OID 16403)
-- Name: examen; Type: DATABASE; Schema: -; Owner: postgres
--

CREATE DATABASE examen WITH TEMPLATE = template0 ENCODING = 'SQL_ASCII';


ALTER DATABASE examen OWNER TO postgres;

\connect examen

SET client_encoding = 'SQL_ASCII';
SET standard_conforming_strings = off;
SET check_function_bodies = false;
SET client_min_messages = warning;
SET escape_string_warning = off;

--
-- TOC entry 1632 (class 0 OID 0)
-- Dependencies: 4
-- Name: SCHEMA public; Type: COMMENT; Schema: -; Owner: postgres
--

COMMENT ON SCHEMA public IS 'Standard public schema';


--
-- TOC entry 270 (class 2612 OID 16386)
-- Name: plpgsql; Type: PROCEDURAL LANGUAGE; Schema: -; Owner: postgres
--

CREATE PROCEDURAL LANGUAGE plpgsql;


SET search_path = public, pg_catalog;

SET default_tablespace = '';

SET default_with_oids = false;

--
-- TOC entry 1276 (class 1259 OID 16406)
-- Dependencies: 4
-- Name: alumnos; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE alumnos (
    alu_id integer NOT NULL,
    alu_pat character varying(30),
    alu_mat character varying(30),
    alu_nom character varying(30),
    alu_fna date,
    alu_tel character varying(20),
    alu_dir character varying(50),
    alu_mail character varying(50)
);


ALTER TABLE public.alumnos OWNER TO postgres;

--
-- TOC entry 1275 (class 1259 OID 16404)
-- Dependencies: 1276 4
-- Name: alumnos_alu_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE alumnos_alu_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MAXVALUE
    NO MINVALUE
    CACHE 1;


ALTER TABLE public.alumnos_alu_id_seq OWNER TO postgres;

--
-- TOC entry 1634 (class 0 OID 0)
-- Dependencies: 1275
-- Name: alumnos_alu_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE alumnos_alu_id_seq OWNED BY alumnos.alu_id;


--
-- TOC entry 1635 (class 0 OID 0)
-- Dependencies: 1275
-- Name: alumnos_alu_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('alumnos_alu_id_seq', 1, false);


--
-- TOC entry 1278 (class 1259 OID 16411)
-- Dependencies: 4
-- Name: cursos; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE cursos (
    cursos_id integer NOT NULL,
    cursos_cod character varying(5),
    cursos_nom character varying(30)
);


ALTER TABLE public.cursos OWNER TO postgres;

--
-- TOC entry 1277 (class 1259 OID 16409)
-- Dependencies: 1278 4
-- Name: cursos_cursos_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE cursos_cursos_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MAXVALUE
    NO MINVALUE
    CACHE 1;


ALTER TABLE public.cursos_cursos_id_seq OWNER TO postgres;

--
-- TOC entry 1636 (class 0 OID 0)
-- Dependencies: 1277
-- Name: cursos_cursos_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE cursos_cursos_id_seq OWNED BY cursos.cursos_id;


--
-- TOC entry 1637 (class 0 OID 0)
-- Dependencies: 1277
-- Name: cursos_cursos_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('cursos_cursos_id_seq', 1, false);


--
-- TOC entry 1280 (class 1259 OID 16425)
-- Dependencies: 1618 1619 1620 1621 1622 4
-- Name: cursos_notas; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE cursos_notas (
    curno_id integer NOT NULL,
    curno_cur integer,
    curno_alu integer,
    curno_n1 integer DEFAULT 0 NOT NULL,
    curno_n2 integer DEFAULT 0 NOT NULL,
    curno_n3 integer DEFAULT 0 NOT NULL,
    curno_n4 integer DEFAULT 0 NOT NULL,
    curno_cond character varying(20),
    curno_mail boolean DEFAULT false
);


ALTER TABLE public.cursos_notas OWNER TO postgres;

--
-- TOC entry 1279 (class 1259 OID 16423)
-- Dependencies: 4 1280
-- Name: cursos_notas_curno_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE cursos_notas_curno_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MAXVALUE
    NO MINVALUE
    CACHE 1;


ALTER TABLE public.cursos_notas_curno_id_seq OWNER TO postgres;

--
-- TOC entry 1638 (class 0 OID 0)
-- Dependencies: 1279
-- Name: cursos_notas_curno_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE cursos_notas_curno_id_seq OWNED BY cursos_notas.curno_id;


--
-- TOC entry 1639 (class 0 OID 0)
-- Dependencies: 1279
-- Name: cursos_notas_curno_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('cursos_notas_curno_id_seq', 1, false);


--
-- TOC entry 1283 (class 1259 OID 16439)
-- Dependencies: 1358 4
-- Name: rep_notas; Type: VIEW; Schema: public; Owner: postgres
--

CREATE VIEW rep_notas AS
    SELECT cursos.cursos_id, cursos.cursos_nom, alumnos.alu_id, alumnos.alu_pat, alumnos.alu_mat, alumnos.alu_nom, alumnos.alu_mail, cursos_notas.curno_n1, cursos_notas.curno_n2, cursos_notas.curno_n3, cursos_notas.curno_n4, cursos_notas.curno_cond, cursos_notas.curno_mail FROM ((cursos JOIN cursos_notas ON ((cursos.cursos_id = cursos_notas.curno_cur))) JOIN alumnos ON ((cursos_notas.curno_alu = alumnos.alu_id)));


ALTER TABLE public.rep_notas OWNER TO postgres;

--
-- TOC entry 1282 (class 1259 OID 16435)
-- Dependencies: 1624 4
-- Name: usuarios; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE usuarios (
    user_id integer NOT NULL,
    user_cod character(4) DEFAULT 'U000'::bpchar,
    user_nom character varying(30),
    user_pass character varying(20)
);


ALTER TABLE public.usuarios OWNER TO postgres;

--
-- TOC entry 1281 (class 1259 OID 16433)
-- Dependencies: 1282 4
-- Name: usuarios_user_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE usuarios_user_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MAXVALUE
    NO MINVALUE
    CACHE 1;


ALTER TABLE public.usuarios_user_id_seq OWNER TO postgres;

--
-- TOC entry 1640 (class 0 OID 0)
-- Dependencies: 1281
-- Name: usuarios_user_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE usuarios_user_id_seq OWNED BY usuarios.user_id;


--
-- TOC entry 1641 (class 0 OID 0)
-- Dependencies: 1281
-- Name: usuarios_user_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('usuarios_user_id_seq', 1, false);


--
-- TOC entry 1615 (class 2604 OID 16408)
-- Dependencies: 1276 1275 1276
-- Name: alu_id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE alumnos ALTER COLUMN alu_id SET DEFAULT nextval('alumnos_alu_id_seq'::regclass);


--
-- TOC entry 1616 (class 2604 OID 16413)
-- Dependencies: 1278 1277 1278
-- Name: cursos_id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE cursos ALTER COLUMN cursos_id SET DEFAULT nextval('cursos_cursos_id_seq'::regclass);


--
-- TOC entry 1617 (class 2604 OID 16427)
-- Dependencies: 1280 1279 1280
-- Name: curno_id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE cursos_notas ALTER COLUMN curno_id SET DEFAULT nextval('cursos_notas_curno_id_seq'::regclass);


--
-- TOC entry 1623 (class 2604 OID 16437)
-- Dependencies: 1282 1281 1282
-- Name: user_id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE usuarios ALTER COLUMN user_id SET DEFAULT nextval('usuarios_user_id_seq'::regclass);


--
-- TOC entry 1625 (class 0 OID 16406)
-- Dependencies: 1276
-- Data for Name: alumnos; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY alumnos (alu_id, alu_pat, alu_mat, alu_nom, alu_fna, alu_tel, alu_dir, alu_mail) FROM stdin;
\.


--
-- TOC entry 1626 (class 0 OID 16411)
-- Dependencies: 1278
-- Data for Name: cursos; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY cursos (cursos_id, cursos_cod, cursos_nom) FROM stdin;
\.


--
-- TOC entry 1627 (class 0 OID 16425)
-- Dependencies: 1280
-- Data for Name: cursos_notas; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY cursos_notas (curno_id, curno_cur, curno_alu, curno_n1, curno_n2, curno_n3, curno_n4, curno_cond, curno_mail) FROM stdin;
\.


--
-- TOC entry 1628 (class 0 OID 16435)
-- Dependencies: 1282
-- Data for Name: usuarios; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY usuarios (user_id, user_cod, user_nom, user_pass) FROM stdin;
\.


--
-- TOC entry 1633 (class 0 OID 0)
-- Dependencies: 4
-- Name: public; Type: ACL; Schema: -; Owner: postgres
--

REVOKE ALL ON SCHEMA public FROM PUBLIC;
REVOKE ALL ON SCHEMA public FROM postgres;
GRANT ALL ON SCHEMA public TO postgres;
GRANT ALL ON SCHEMA public TO PUBLIC;


-- Completed on 2007-03-12 16:48:51

--
-- PostgreSQL database dump complete
--

