#Table

# Table ETUDIANT
Create Table ETUDIANT(
	id_etudiant int auto_increment,
	nom_etudiant varchar(35),
	prenom_etudiant varchar(35),
	semestre_etranger_etudiant varchar(35),
	date_entree_ESTA_etudiant varchar(15),
	redoublant_etudiant varchar(35),
	score_Toeic_etudiant int,
	score_Widaf_etudiant int,
	score_Elyte_etudiant int,
	boursier_etudiant varchar(15),
	portable_etudiant varchar(25),
	mail_etudiant varchar(50),
	date_naissance_etudiant varchar(35),
	lieu_naissance_etudiant varchar(35),
	departement_naissance_etudiant varchar(35),
	sexe_etudiant varchar(35),
	numero_secu_etudiant varchar(35),
	numero_BEA_INE_etudiant varchar(35),
	adresse_etudiant varchar(50),
	code_postal_etudiant varchar(35),
	ville_etudiant varchar(50),
	nationalite_etudiant varchar(60),
	envoi_bulletin_etudiant varchar(35),
	en_stage_etudiant varchar(10),
	nom_semestre_etudiant varchar(20),
	nom_bacplus2_etudiant varchar(20),
	nom_bac_etudiant varchar(20),
	nom_pays_naissance_etudiant varchar(20),
	nom_pays_residence_etudiant varchar(20),
	nom_etablissement_etudiant varchar(50),
	nom_parents_etudiant varchar(30),
	key(nom_etudiant),
	primary key (id_etudiant)
);



#Table PARENTS
create Table PARENTS(
	id_parents int auto_increment,
	nom_parents varchar(35),
	prenom_parents varchar(35),
	genre_parents varchar(30),
	adresse_parents varchar(50),
	code_postal_parents varchar(35),
	ville_parents varchar(35),
	telephone_fix_parents varchar(35),
	portable_mere varchar(35),
	portable_pere varchar(35),
	profession_mere varchar(35),
	entreprise_mere varchar(35),
	profession_pere varchar(35),
	entreprise_pere varchar(35),
	diplome_parents varchar(20),
	nom_pays_parents varchar(30),
	key(nom_parents),
	primary key (id_parents)
); 



#Table SEMESTRE
Create Table SEMESTRE(
	id_semestre int auto_increment,
	nom_semestre varchar(20),
	nb_etudiants_semestre int,
	key(nom_semestre),
	primary key (id_semestre)
	
);



#Table GROUPE
Create Table GROUPE(
	id_groupe int auto_increment,
	nom_groupe varchar(20),
	nb_etudiants_groupe int,
	nom_semestre_groupe varchar(10),
	key(nom_groupe),
	primary key (id_groupe)
);



#Table PROFESSEUR
Create Table PROFESSEUR(
	id_professeur int auto_increment,
	nom_professeur varchar(35),
	prenom_professeur varchar(35),
	date_naissance_professeur varchar(35),
	adresse_professeur varchar(35),
	code_postal_professeur varchar(35),
	ville_professeur varchar(35),
	telephone_professionnel_professeur varchar(35),
	telephone_personnel_professeur varchar(35),
	portable_professeur varchar(35),
	mail_professeur varchar(50),
	nom_matiere_enseigner_professeur varchar(30),
	nom_pole_enseignement_professeur varchar(30),
	nom_etablissement_professeur varchar(50),
	nom_entreprise_professeur varchar(50),
	key(nom_professeur),
	primary key (id_professeur)
);



#Table STAGE
create Table STAGE(
	id_stage int auto_increment,
	annee_stage varchar(15),
	intitule_stage varchar(30),
	mission_stage varchar(50),
	objectif_stage varchar (50),
	responsabilites_stage varchar(40),
	dates_stages varchar(40),
	indemnite_stage varchar(40),
	nom_semestre_stage varchar(10),
	nom_permanent_stage varchar(20),
	nom_etudiant_stage varchar(20),
	nom_contact_stage varchar(20),
	nom_entreprise_stage varchar(30),
	key(intitule_stage),
	primary key (id_stage)
);



#Table PERMANENT
Create Table PERMANENT(
	id_permanent int auto_increment,
	nom_permanent varchar(35),
	prenom_permanent varchar(35),
	portable_permanent varchar(15),
	adresse_permanent varchar(35),
	code_postal_permanent varchar(10),
	ville_permanent varchar(30),
	mail_permanent varchar(30),
	nom_entreprise_permanent varchar(40),
	intitule_stage_permanent varchar(30),
	nom_professeur_permanent varchar(30),
	key(nom_permanent),
	primary key (id_permanent)
);



#Table ENTREPRISE
Create Table ENTREPRISE(
	id_entreprise int auto_increment,
	nom_entreprise varchar(35),
	date_maj_entreprise varchar(35),
	site_internet_entreprise varchar(50),
	numero_telephone_entreprise varchar(35),
	adresse_entreprise varchar(35),
	code_postal_entreprise varchar(35),
	ville_entreprise varchar(35),
	logo_entreprise varchar(100),
	pris_stagiaire_entreprise varchar(35),
	interesse_stagiaire_entreprise varchar(35),
	ancien_eleve_entreprise varchar(35),
	forums_entreprise varchar(10),
	date_visite_entreprise varchar(35),
	date_envoi_informtion_entreprise varchar(15),
	commentaires_envoi_entreprise varchar(100),
	nom_type_entreprise varchar(30),
	nom_secteur_activite_entreprise varchar(30),
	nom_pays_entreprise varchar(30),
	nom_permanent_entreprise varchar(20),
	nom_evenements_entreprise varchar(30),
	key(nom_entreprise),
	primary key (id_entreprise)
);



#Table SOUTIEN_FINANCIER
create Table SOUTIEN_FINANCIER(
	id_soutien_financier int auto_increment,
	type_soutien_financier varchar(30),
	montant_soutien_financier float(6,2),
	date_dernier_soutien_financier varchar(15),
	nom_entreprise_soutien_financier varchar(30),
	key(type_soutien_financier),
	primary key (id_soutien_financier)
);



#Table CONTACT
Create Table CONTACT(
	id_contact int auto_increment,
	nom_contact varchar(35),
	prenom_contact varchar(35),
	date_maj_contact varchar(15),
	genre_contact varchar(35),
	fonction_contact varchar(40),
	portable_contact varchar(35),
	mail_contact varchar(40),
	observation_contact varchar(50),
	nom_etablissement_contact varchar(50),
	nom_entreprise_contact varchar(30),
	key(nom_contact),
	primary key(id_contact)
);



#Table BACCALAUREAT
Create Table BACCALAUREAT(
	id_baccalaureat int auto_increment,
	annee_baccalaureat varchar(15),
	nom_baccalaureat varchar(35),
	mention_obtenu_baccalaureat varchar(20),
	option_baccalaureat varchar(35),
	nb_etudiants_baccalaureat int, 
	key(nom_baccalaureat),
	primary key (id_baccalaureat)
);



#Table BACPLUS2
Create Table BACPLUS2(
	id_bacplus2 int auto_increment,
	nom_bacplus2 varchar(35),
	option_bacplus2 varchar(35),
	annee_bacplus2 varchar(15),
	nb_etudiants_bacplus2 int,
	key(nom_bacplus2),
	primary key (id_bacplus2)
);



#Table ETABLISSEMENT
Create Table ETABLISSEMENT(
	id_etablissement int auto_increment,
	nom_etablissement varchar(35),
	date_maj_etablissement varchar(15),
	chimie_etablissement varchar(35),
	telephone_etablissement varchar(35),
	mail_etablissement varchar(50),
	adresse_etablissement varchar(35),
	code_postal_etablissement varchar(35),
	ville_etablissement varchar(35),
	bac_etablissement varchar(35),
	bacPlus2_etablissement varchar(35),
	nom_academie_etablissement varchar(50),
	nom_categorie_etablissement varchar(30),
	key(nom_etablissement),
	primary key (id_etablissement)
);



#Table ANCIEN_ELEVE
Create Table ANCIEN_ELEVE(
	id_ancien_eleve int auto_increment,
	date_maj_ancien_eleve varchar(15),
	diplome_ancien_eleve varchar(35),
	nom_ancien_eleve varchar(35),
	prenom_ancien_eleve varchar(35),
	2A2E_ancien_eleve varchar(35),
	compte_likedin_ancien_eleve varchar(35),
	nom_marital_ancien_eleve varchar(35),
	date_promoBACplus4_ancien_eleve year,
	date_promoBACplus5_ancien_eleve year,
	portable_ancien_eleve varchar(35),
	telephone_fix_ancien_eleve varchar(35),
	mail_ancien_eleve varchar(50),
	commentaires_envoi_ancien_eleve varchar(60),
	poste_occupe varchar(35),
	categorie_poste_occupe_ancien_eleve varchar(30),
	salaire_moyen_ancien_eleve varchar(35),
	nom_entreprise_ancien_eleve varchar(50),
	key(nom_ancien_eleve),
	primary key (id_ancien_eleve)
);



#Table ASSOCIATION_ETUDIANTE
Create Table ASSOCIATION_ETUDIANTE(
	id_association_etudiante int auto_increment,
	nom_association_etudiante varchar(40),
	nom_president_association_etudiante varchar(30),
	nom_vicePresident_association_etudiante varchar(30),
	nom_secretaire_association_etudiante varchar(30),
	nom_viceSecretaire_association_etudiante varchar(30),
	nom_tresorier_association_etudiante varchar(30),
	nom_viceTresorier_association_etudiante varchar(30),
	key(nom_association_etudiante),
	primary key(id_association_etudiante)
);



#Table DELEGUE
Create Table DELEGUE(
	id_delegue int auto_increment,
	nom_delegue varchar(30),
	annee_delegue varchar(15),
	semestre_delegue varchar(30),
	key(nom_delegue),
	primary key (id_delegue)
);


#Liste déroulante 



#Liste déroulante CATEGORIE POSTE OCCUPE
Create Table LD_CATEGORIE_POSTE_OCCUPE(
id_categorie_poste_occupe int auto_increment,
nom_categorie_poste_occupe varchar(40),
key(nom_categorie_poste_occupe),
primary key (id_categorie_poste_occupe)
);



#Liste déroulante MATIERE
Create Table LD_POLE_ENSEIGNEMENT(
	id_pole_enseignement int auto_increment,
	nom_pole_enseignement varchar(30),
	key (nom_pole_enseignement),
	primary key	(id_pole_enseignement)
);



#Liste déroulante PAYS
Create Table LD_PAYS(
	id_pays int auto_increment,
	nom_pays varchar(35),
	key(nom_pays),
	primary key (id_pays)
);#Table de Jonction 



#Liste déroulante TYPE_ENTREPRISE
Create Table LD_TYPE_ENTREPRISE(
	id_type_entreprise int auto_increment,
	nom_type_entreprise varchar(30),
	key(nom_type_entreprise),
	primary key (id_type_entreprise)
);



#Liste déroulante SECTEUR_ACTIVITE
Create Table LD_SECTEUR_ACTIVITE(
	id_secteur_activite int auto_increment,
	nom_secteur_activite varchar(30),
	key(nom_secteur_activite),
	primary key (id_secteur_activite)
);



#Liste déroulante EVENEMENTS
Create Table LD_EVENEMENTS(
	id_evenements int auto_increment,
	nom_evenements varchar(30),
	key(nom_evenements),
	primary key (id_evenements)
);



#Liste déroulante ACADEMIE
Create Table LD_ACADEMIE(
	id_academie int auto_increment,
	nom_academie varchar(35),
	key(nom_academie),
	primary key (id_academie)
);



#Liste déroulante CATEGORIE_ETABLISSEMENT
Create Table LD_CATEGORIE_ETABLISSEMENT(
	id_categorie_etablissement int auto_increment,
	nom_categorie_etablissement varchar(35),
	key(nom_categorie_etablissement),
	primary key (id_categorie_etablissement)
);



#Table de Jonction



#Jonction ETUDIANT_GROUPE
Create Table J_ETUDIANT_GROUPE(
	id_J_ETUDIANT_GROUPE int auto_increment,
	nom_etudiant varchar(30) not null,
	nom_groupe varchar(10) not null,
	primary key (id_J_ETUDIANT_GROUPE)
);



#Jonction SEMESTRE_PROFESSEUR
Create Table J_SEMESTRE_PROFESSEUR(
	id_J_SEMESTRE_PROFESSEUR int auto_increment,
	nom_semestre varchar(10) not null,
	nom_professeur varchar(30) not null,
	primary key (id_J_SEMESTRE_PROFESSEUR)
);



#Jonction GROUPE_PROFESSEUR
Create Table J_GROUPE_PROFESSEUR(
	id_J_GROUPE_PROFESSEUR int auto_increment,
	nom_professeur varchar(30) not null,
	nom_groupe varchar(10) not null,
	primary key (id_J_GROUPE_PROFESSEUR)
);



#Jonction BACCALAUREAT_ETABLISSEMENT
Create Table J_BACCALAUREAT_ETABLISSEMENT(
	id_J_BACCALAUREAT_ETABLISSEMENT int auto_increment,
	nom_etablissement varchar(50) not null,
	nom_bac varchar(30) not null,
	primary key (id_J_BACCALAUREAT_ETABLISSEMENT)
);



#Jonction BACPLUS2_ETABLISSEMENT
Create Table J_BACPLUS2_ETABLISSEMENT(
	id_J_BACPLUS2_ETABLISSEMENT int auto_increment,
	nom_etablissement varchar(50) not null,
	nom_bacplus2 varchar(30) not null,
	primary key (id_J_BACPLUS2_ETABLISSEMENT)
);


#Spécial 


Create Table USERS(
	id_user int auto_increment,
	login_user varchar(20),
	password_user varchar(20),
	primary key (id_user)
);



# FIN