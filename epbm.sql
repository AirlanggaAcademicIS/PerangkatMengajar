/*==============================================================*/
/* DBMS name:      MySQL 5.0                                    */
/* Created on:     5/5/2016 9:34:20 AM                          */
/*==============================================================*/


drop table if exists BACAAN;

drop table if exists DAFTAR_METODE;

drop table if exists DAFTAR_SS;

drop table if exists DOSEN;

drop table if exists FAKULTAS;

drop table if exists KOMPETENSI_KHUSUS;

drop table if exists MATA_KULIAH;

drop table if exists MEDIA;

drop table if exists MEMILIKI_7;

drop table if exists MENGAJAR;

drop table if exists METODE;

drop table if exists PRASYARAT;

drop table if exists PROGRAM_STUDI;

drop table if exists SOFTSKILL;

drop table if exists SUB_BAHASAN;

/*==============================================================*/
/* Table: BACAAN                                                */
/*==============================================================*/
create table BACAAN
(
   KODE_BACAAN          varchar(10) not null,
   KODE_MK              varchar(10),
   JUDUL                varchar(50) not null,
   TAHUN                int not null,
   NAMA_PENULIS         varchar(50) not null,
   NAMA_PENERBIT        varchar(25) not null,
   KOTA_PENERBIT        varchar(15) not null,
   primary key (KODE_BACAAN)
);

/*==============================================================*/
/* Table: DAFTAR_METODE                                         */
/*==============================================================*/
create table DAFTAR_METODE
(
   KODE_METODE          varchar(10) not null,
   KODE_KK              varchar(10) not null,
   primary key (KODE_METODE, KODE_KK)
);

/*==============================================================*/
/* Table: DAFTAR_SS                                             */
/*==============================================================*/
create table DAFTAR_SS
(
   KODE_SS              varchar(10) not null,
   KODE_MK              varchar(10) not null,
   primary key (KODE_SS, KODE_MK)
);

/*==============================================================*/
/* Table: DOSEN                                                 */
/*==============================================================*/
create table DOSEN
(
   NIP                  varchar(20) not null,
   NAMA                 varchar(50) not null,
   PASSWORD             varchar(12) not null,
   primary key (NIP)
);

/*==============================================================*/
/* Table: FAKULTAS                                              */
/*==============================================================*/
create table FAKULTAS
(
   ID_FAK               varchar(10) not null,
   NAMA_FAK             varchar(45) not null,
   primary key (ID_FAK)
);

/*==============================================================*/
/* Table: KOMPETENSI_KHUSUS                                     */
/*==============================================================*/
create table KOMPETENSI_KHUSUS
(
   KODE_KK              varchar(10) not null,
   KODE_MK              varchar(10) not null,
   NAMA_KK              varchar(35) not null,
   NAMA_PB              varchar(35) not null,
   WAKTU                varchar(4) not null,
   primary key (KODE_KK)
);

/*==============================================================*/
/* Table: MATA_KULIAH                                           */
/*==============================================================*/
create table MATA_KULIAH
(
   KODE_MK              varchar(10) not null,
   NIP                  varchar(20) not null,
   KODE_PRODI           varchar(10) not null,
   NAMA_MK              varchar(50) not null,
   BEBAN_STUDI          int not null,
   SEMESTER             int not null,
   KOMPETENSI           text,
   DESKRIPSI            text,
   HARI                 text,
   primary key (KODE_MK)
);

/*==============================================================*/
/* Table: MEDIA                                                 */
/*==============================================================*/
create table MEDIA
(
   KODE_MEDIA           varchar(10) not null,
   NAMA_MEDIA           varchar(35),
   primary key (KODE_MEDIA)
);

/*==============================================================*/
/* Table: MEMILIKI_7                                            */
/*==============================================================*/
create table MEMILIKI_7
(
   KODE_MEDIA           varchar(10) not null,
   KODE_KK              varchar(10) not null,
   primary key (KODE_MEDIA, KODE_KK)
);

/*==============================================================*/
/* Table: MENGAJAR                                              */
/*==============================================================*/
create table MENGAJAR
(
   NIP                  varchar(20) not null,
   KODE_MK              varchar(10) not null,
   primary key (NIP, KODE_MK)
);

/*==============================================================*/
/* Table: METODE                                                */
/*==============================================================*/
create table METODE
(
   KODE_METODE          varchar(10) not null,
   NAMA_METODE          varchar(35),
   primary key (KODE_METODE)
);

/*==============================================================*/
/* Table: PRASYARAT                                             */
/*==============================================================*/
create table PRASYARAT
(
   KODE_MK              varchar(10) not null,
   MAT_KODE_MK          varchar(10) not null,
   primary key (KODE_MK, MAT_KODE_MK)
);

/*==============================================================*/
/* Table: PROGRAM_STUDI                                         */
/*==============================================================*/
create table PROGRAM_STUDI
(
   KODE_PRODI           varchar(10) not null,
   ID_FAK               varchar(10) not null,
   NAMA_PRODI           varchar(30) not null,
   primary key (KODE_PRODI)
);

/*==============================================================*/
/* Table: SOFTSKILL                                             */
/*==============================================================*/
create table SOFTSKILL
(
   KODE_SS              varchar(10) not null,
   NAMA_SS              varchar(25) not null,
   primary key (KODE_SS)
);

/*==============================================================*/
/* Table: SUB_BAHASAN                                           */
/*==============================================================*/
create table SUB_BAHASAN
(
   KODE_SUB             varchar(10) not null,
   KODE_KK              varchar(10) not null,
   SUB_BAHASAN          varchar(50) not null,
   primary key (KODE_SUB)
);

alter table BACAAN add constraint FK_MEMILIKI_3 foreign key (KODE_MK)
      references MATA_KULIAH (KODE_MK) on delete restrict on update restrict;

alter table DAFTAR_METODE add constraint FK_DAFTAR_METODE foreign key (KODE_METODE)
      references METODE (KODE_METODE) on delete restrict on update restrict;

alter table DAFTAR_METODE add constraint FK_DAFTAR_METODE2 foreign key (KODE_KK)
      references KOMPETENSI_KHUSUS (KODE_KK) on delete restrict on update restrict;

alter table DAFTAR_SS add constraint FK_DAFTAR_SS foreign key (KODE_SS)
      references SOFTSKILL (KODE_SS) on delete restrict on update restrict;

alter table DAFTAR_SS add constraint FK_DAFTAR_SS2 foreign key (KODE_MK)
      references MATA_KULIAH (KODE_MK) on delete restrict on update restrict;

alter table KOMPETENSI_KHUSUS add constraint FK_MEMILIKI_4 foreign key (KODE_MK)
      references MATA_KULIAH (KODE_MK) on delete restrict on update restrict;

alter table MATA_KULIAH add constraint FK_MEMILIKI_2 foreign key (KODE_PRODI)
      references PROGRAM_STUDI (KODE_PRODI) on delete restrict on update restrict;

alter table MATA_KULIAH add constraint FK_PENANGGUNG_JAWAB foreign key (NIP)
      references DOSEN (NIP) on delete restrict on update restrict;

alter table MEMILIKI_7 add constraint FK_MEMILIKI_7 foreign key (KODE_MEDIA)
      references MEDIA (KODE_MEDIA) on delete restrict on update restrict;

alter table MEMILIKI_7 add constraint FK_MEMILIKI_8 foreign key (KODE_KK)
      references KOMPETENSI_KHUSUS (KODE_KK) on delete restrict on update restrict;

alter table MENGAJAR add constraint FK_MENGAJAR foreign key (NIP)
      references DOSEN (NIP) on delete restrict on update restrict;

alter table MENGAJAR add constraint FK_MENGAJAR2 foreign key (KODE_MK)
      references MATA_KULIAH (KODE_MK) on delete restrict on update restrict;

alter table PRASYARAT add constraint FK_PRASYARAT foreign key (KODE_MK)
      references MATA_KULIAH (KODE_MK) on delete restrict on update restrict;

alter table PRASYARAT add constraint FK_PRASYARAT2 foreign key (MAT_KODE_MK)
      references MATA_KULIAH (KODE_MK) on delete restrict on update restrict;

alter table PROGRAM_STUDI add constraint FK_MEMILIKI_1 foreign key (ID_FAK)
      references FAKULTAS (ID_FAK) on delete restrict on update restrict;

alter table SUB_BAHASAN add constraint FK_MEMILIKI_5 foreign key (KODE_KK)
      references KOMPETENSI_KHUSUS (KODE_KK) on delete restrict on update restrict;

