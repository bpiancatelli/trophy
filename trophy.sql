-- Table: trophy_entrainement

-- DROP TABLE trophy_entrainement;

CREATE TABLE trophy_entrainement
(
  id_entrainement serial NOT NULL,
  id_trophy_joueur integer NOT NULL,
  asi integer NOT NULL,
  date_synchro date NOT NULL,
  puissance integer NOT NULL,
  endurance integer NOT NULL,
  vitesse integer NOT NULL,
  marquage integer NOT NULL,
  tacles integer NOT NULL,
  activite integer NOT NULL,
  placement integer NOT NULL,
  passes integer NOT NULL,
  centres integer NOT NULL,
  technique integer NOT NULL,
  tete integer NOT NULL,
  finition integer NOT NULL,
  tirs_de_loin integer NOT NULL,
  coup_francs integer NOT NULL,
  gk_prises_de_balle integer NOT NULL,
  gk_un_contre_un integer NOT NULL,
  gk_reflexes integer NOT NULL,
  gk_habilete_dans_les_airs integer NOT NULL,
  gk_detente integer NOT NULL,
  gk_communication integer NOT NULL,
  gk_degagements_au_pied integer NOT NULL,
  gk_relances_a_la_main integer NOT NULL,
  salaire integer,
  CONSTRAINT sync UNIQUE (id_trophy_joueur, date_synchro)
)
WITH (
  OIDS=FALSE
);
ALTER TABLE trophy_entrainement
  OWNER TO postgres;


-- Table: trophy_joueur

-- DROP TABLE trophy_joueur;

CREATE TABLE trophy_joueur
(
  id_joueur serial NOT NULL,
  id_trophy_joueur integer NOT NULL,
  id_club integer NOT NULL,
  numero_maillot integer NOT NULL,
  ban character varying NOT NULL,
  ban_points integer NOT NULL,
  blessure character varying DEFAULT false,
  nom character varying NOT NULL,
  experience double precision NOT NULL,
  retraite boolean NOT NULL DEFAULT false,
  age real NOT NULL,
  poste character varying NOT NULL,
  asi integer NOT NULL,
  pays character varying NOT NULL,
  puissance integer NOT NULL,
  endurance integer NOT NULL,
  vitesse integer NOT NULL,
  marquage integer NOT NULL,
  tacles integer NOT NULL,
  activite integer NOT NULL,
  placement integer NOT NULL,
  passes integer NOT NULL,
  centres integer NOT NULL,
  technique integer NOT NULL,
  tete integer NOT NULL,
  finition integer NOT NULL,
  tirs_de_loin integer NOT NULL,
  coup_francs integer NOT NULL,
  gk_prises_de_balle integer NOT NULL,
  gk_un_contre_un integer NOT NULL,
  gk_reflexes integer NOT NULL,
  gk_habilete_dans_les_airs integer NOT NULL,
  gk_detente integer NOT NULL,
  gk_communication integer NOT NULL,
  gk_degagements_au_pied integer NOT NULL,
  gk_relances_a_la_main integer NOT NULL,
  salaire integer NOT NULL,
  match_joues integer NOT NULL,
  buts_marques integer NOT NULL,
  passes_decisives integer NOT NULL,
  rendement integer NOT NULL,
  note real NOT NULL,
  cartons integer NOT NULL
)
WITH (
  OIDS=FALSE
);
ALTER TABLE trophy_joueur
  OWNER TO postgres;

-- Table: trophy_stadium

-- DROP TABLE trophy_stadium;

CREATE TABLE trophy_stadium
(
  id_trophy_stadium serial NOT NULL,
  nom_infrastructure character varying,
  niveau_actuel integer,
  valeur character varying,
  cout1 integer NOT NULL,
  cout2 integer,
  cout3 integer,
  cout4 integer,
  cout5 integer,
  cout6 integer,
  cout7 integer,
  cout8 integer,
  cout9 integer,
  cout10 integer,
  maintenance1 integer NOT NULL,
  maintenance2 integer,
  maintenance3 integer,
  maintenance4 integer,
  maintenance5 integer,
  maintenance6 integer,
  maintenance7 integer,
  maintenance8 integer,
  maintenance9 integer,
  maintenance10 integer,
  effect1 integer NOT NULL,
  effect2 double precision,
  effect3 double precision,
  effect4 double precision,
  effect5 double precision,
  effect6 double precision,
  effect7 double precision,
  effect8 double precision,
  effect9 double precision,
  effect10 double precision
)
WITH (
  OIDS=FALSE
);
ALTER TABLE trophy_stadium
  OWNER TO postgres;

