
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
);

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
);

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
);


-- SELECT * from trophy_stadium;
begin work;
insert into trophy_stadium  (nom_infrastructure, niveau_actuel, cout1, maintenance1, effect1) 
values 
('stade',24000,10000,35,200); -- cout : 10000 par place, 35 : maintenance par place, 200 : billet d'entree


insert into trophy_stadium  (nom_infrastructure, niveau_actuel, valeur,cout1,cout2,cout3,cout4,cout5,cout6,cout7,cout8,cout9,cout10, maintenance1,maintenance2,maintenance3,maintenance4, maintenance5,maintenance6,maintenance7,maintenance8,maintenance9,maintenance10, effect1,effect2,effect3,effect4,effect5,effect6,effect7,effect8,effect9,effect10)
values 
('fastfood',7,'par spectateur',187000,375000,750000,1500000,3000000,4500000,6000000,7500000,11250000,15000000,45000,90000,135000,180000,225000,270000,315000,360000,405000,450000,4,8,12,16,20,24,28,32,36,40),
('centre medical',0,'% blessure',1250000,3500000,8250000,15000000,25000000,40000000,55000000,75000000,100000000,125000000,50000,250000,625000,1250000,2000000,3000000,4500000,6000000,8000000,10000000,10,20,30,40,50,60,70,80,90,100),
('produits derives',7,'spectateur',500000, 1000000, 2000000, 4000000, 8000000, 12000000, 16000000, 20000000, 30000000, 40000000, 112500, 225000, 337500, 450000, 562500, 675000, 787500, 900000, 1012500, 1125000,10,20,30,40,50,60,70,80,90,10),
('boutique du club',10,'par fan par semaine',50000, 150000, 250000, 350000, 450000, 550000, 650000, 750000, 850000, 950000, 80000, 160000, 300000, 600000, 1000000, 1400000, 1800000, 2500000, 3250000, 6500000, 20,40,60,80,100,120,140,160,180,200),
('parking',6,'% affluence',125000, 750000, 2250000, 5000000, 9000000, 15000000, 22500000, 30000000, 40000000, 50000000, 10000, 50000, 100000, 150000, 250000, 375000, 500000, 625000, 800000, 1000000,1,2,3,4,5,6,7,8,9,10),
('kine',2,'% blessure',50000, 200000, 450000, 800000, 1250000, 1800000, 2450000, 3200000, 4000000, 5000000, 10000, 50000, 100000, 150000, 250000, 375000, 500000, 625000, 800000, 1000000, 10, 20, 30, 40, 50, 60, 70, 80, 90, 100),
('restaurant',7,'par spectateur',250000, 500000, 1000000, 2000000, 4000000, 6000000, 8000000, 10000000, 15000000, 20000000, 56250, 112500, 168750, 225000, 281250, 337500, 393750, 450000, 506250, 562500,5,10,15,20,25,30,35,40,45,50),
('stand de saucisses',8,'par spectateur',125000, 250000, 500000, 1000000, 2000000, 3000000, 4000000, 5000000, 7500000, 10000000, 28125, 56250, 84375, 112500, 140625, 168750, 196875, 225000, 253125,281250,2.5,5,7.5,10,12.5,15,17.5,20,22.5,25),
('toilettes',5,'% affluence',125000,750000,2250000,5000000,9000000,15000000,22500000,30000000,40000000,50000000,10000,50000,100000,150000,250000,375000,500000,625000,800000,1000000,1,2,3,4,5,6,7,8,9,10),
('centre de formation',7,'',6500000,6500000,6500000,6500000,6500000,6500000,6500000,6500000,6500000,6500000,25000,150000,500000,1000000,1750000,3000000,4350000,6250000,8350000,11000000,1,2,2,2,2,3,3,3,3,3),
('terrains d''entrainement',3,'% entrainement',7250000,7250000,7250000,7250000,7250000,7250000,7250000,7250000,7250000,7250000,30000,185000,612500,1250000,2150000,3650000,5350000,7650000,10250000,13500000,5,10,15,20,25,30,35,40,45,50);

insert into trophy_stadium  (nom_infrastructure, niveau_actuel, valeur,cout1,cout2,maintenance1,maintenance2, effect1,effect2) 
values 
('eclairage',0,'% affluence',1000000,20000000,10000,5000000,1,2),
('bache de terrain',0,'',10000000,0,50000,0,0,0),
('drainage',0,'drainage',10000000,0,50000,0,0,0),
('arrosage',0,'arrosage',2000000,0,50000,0,0,0),
('chauffage',0,'chauffage',15000000,0,350000,0,0,0)
commit



