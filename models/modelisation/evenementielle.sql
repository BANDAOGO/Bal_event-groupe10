drop table if exists Commentaire;

drop table if exists Evenements;

drop table if exists compte;

/*==============================================================*/
/* Table: Commentaire                                           */
/*==============================================================*/
create table Commentaire
(
   id_commentaire       int not null AUTO_INCREMENT,
   nom_visiteur         varchar(254),
   libelle_commentaire  varchar(254),
   primary key (id_commentaire)
);

/*==============================================================*/
/* Table: Evenements                                            */
/*==============================================================*/
create table Evenements
(
   id_evenementiel      int not null AUTO_INCREMENT,
   photo_evenementiel   varchar(254),
   nom_evenement        varchar(254),
   date_debut           datetime,
   date_fin             datetime,
   organisateur         varchar(254),
   description_evenementiel varchar(254),
   primary key (id_evenementiel)
);

/*==============================================================*/
/* Table: compte                                                */
/*==============================================================*/
create table compte
(
  
   user_name            varchar(254),
   mot_de_passe         varchar(254) not null,
   repeat_password      varchar(254),
   primary key (mot_de_passe)
);

