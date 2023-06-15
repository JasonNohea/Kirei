-- SQLINES LICENSE FOR EVALUATION USE ONLY
CREATE TABLE company (
    companyid        INTEGER NOT NULL,
    address          VARCHAR(70) NOT NULL,
    city             VARCHAR(30) NOT NULL,
    province         VARCHAR(35) NOT NULL,
    companyname      VARCHAR(40) NOT NULL,
    numberofemployee INTEGER,
    profilephoto     VARCHAR(50)
);

-- SQLINES LICENSE FOR EVALUATION USE ONLY
/*CREATE UNIQUE INDEX company_idx ON
    company (
        companyid
    ASC );

-- SQLINES LICENSE FOR EVALUATION USE ONLY
CREATE UNIQUE INDEX company_idxv1 ON
    company (
        companyid
    ASC );
*/
ALTER TABLE company ADD CONSTRAINT company_pk PRIMARY KEY ( companyid );

ALTER TABLE company ADD CONSTRAINT company_companyid_un UNIQUE ( companyid );

-- SQLINES LICENSE FOR EVALUATION USE ONLY
CREATE TABLE photo_project (
    photos            VARCHAR(70),
    project_projectid INTEGER NOT NULL
);

-- SQLINES LICENSE FOR EVALUATION USE ONLY
CREATE TABLE progress_photos (
    photos                 VARCHAR(70),
    talent_talentid        INTEGER NOT NULL,
    ppgr_project_projectid INTEGER NOT NULL
);

-- SQLINES LICENSE FOR EVALUATION USE ONLY
CREATE TABLE project (
    projectid           INTEGER NOT NULL,
    company_companyid   INTEGER NOT NULL,
    projectname         VARCHAR(50) NOT NULL,
    requiredjobposition VARCHAR(30) NOT NULL,
    talentrequirement   VARCHAR(50) NOT NULL,
    projectdescription  VARCHAR(300),
    projectlocation     VARCHAR(40) NOT NULL,
    project_startdate   DATETIME NOT NULL,
    project_enddate     DATETIME,
    project_photos      VARCHAR(100),
    deadline            DATETIME NOT NULL,
    salary_min          DOUBLE NOT NULL,
    salary_max          DOUBLE,
    status              VARCHAR(30) NOT NULL,
    talentneededmin     DOUBLE,
    talentneededmax     DOUBLE
);

ALTER TABLE project ADD CONSTRAINT project_pk PRIMARY KEY ( projectid );
ALTER TABLE project MODIFY projectid INT AUTO_INCREMENT;


-- SQLINES LICENSE FOR EVALUATION USE ONLY
CREATE TABLE project_application (
    project_projectid INTEGER NOT NULL,
    talent_talentid   INTEGER NOT NULL
);

/*
-- SQLINES LICENSE FOR EVALUATION USE ONLY
CREATE INDEX project_application__idx_prj ON
    project_application (
        project_projectid
    ASC );

-- SQLINES LICENSE FOR EVALUATION USE ONLY
CREATE INDEX project_application__idx_tln ON
    project_application (
        talent_talentid
    ASC );
*/
ALTER TABLE project_application ADD CONSTRAINT project_application_pk PRIMARY KEY ( project_projectid,
                                                                                    talent_talentid );

-- SQLINES LICENSE FOR EVALUATION USE ONLY
CREATE TABLE project_progress (
    description       VARCHAR(35) NOT NULL,
    `Date`            DATETIME NOT NULL,
    deadline          DATETIME NOT NULL,
    project_projectid INTEGER NOT NULL
);

ALTER TABLE project_progress ADD CONSTRAINT project_progress_pk PRIMARY KEY ( project_projectid );

-- SQLINES LICENSE FOR EVALUATION USE ONLY
CREATE TABLE talent (
    talentid              INTEGER NOT NULL,
    birthdate             DATETIME NOT NULL,
    gender                VARCHAR(15) NOT NULL,
    cv                    VARCHAR(50),
    portofolio            VARCHAR(50),
    certificate           VARCHAR(50),
    status                VARCHAR(15) NOT NULL,
    expectationworktype   VARCHAR(40) NOT NULL,
    availableworkhoursmin DATETIME,
    availableworkhoursmax DATETIME,
    skills                VARCHAR(70) NOT NULL,
    preferences           VARCHAR(50),
    link_ig               VARCHAR(60),
    link_fb               VARCHAR(60),
    link_linkedin         VARCHAR(60),
    link_twitter          VARCHAR(60),
    profilephoto          VARCHAR(50)
);

ALTER TABLE talent ADD CONSTRAINT talent_users_userid_un PRIMARY KEY ( talentid );

ALTER TABLE talent ADD CONSTRAINT tln_pk UNIQUE ( talentid );

-- SQLINES LICENSE FOR EVALUATION USE ONLY
CREATE TABLE `Users` (
    userid    INTEGER NOT NULL,
    usertype  VARCHAR(25) NOT NULL,
    firstname VARCHAR(30) NOT NULL,
    lastname  VARCHAR(30),
    email     VARCHAR(50) NOT NULL,
    password  VARCHAR(25) NOT NULL,
    phonenum  VARCHAR(15)
);

ALTER TABLE `Users` ADD CONSTRAINT users_pk PRIMARY KEY ( userid );
ALTER TABLE `Users` MODIFY userid INT AUTO_INCREMENT;


-- SQLINES LICENSE FOR EVALUATION USE ONLY
CREATE TABLE work_experience (
    talent_talentid INTEGER NOT NULL,
    jobposition     VARCHAR(40) NOT NULL,
    companyname     VARCHAR(40) NOT NULL,
    jobtype         VARCHAR(40) NOT NULL,
    worktime        DATETIME NOT NULL
);

ALTER TABLE work_experience ADD CONSTRAINT work_experience_pk PRIMARY KEY ( talent_talentid );

ALTER TABLE company
    ADD CONSTRAINT company_user_fk FOREIGN KEY ( companyid )
        REFERENCES `Users` ( userid );

ALTER TABLE photo_project
    ADD CONSTRAINT pht_prj_fk FOREIGN KEY ( project_projectid )
        REFERENCES project ( projectid );

ALTER TABLE progress_photos
    ADD CONSTRAINT prg_pht_prj_prg_fk FOREIGN KEY ( ppgr_project_projectid )
        REFERENCES project_progress ( project_projectid );

ALTER TABLE progress_photos
    ADD CONSTRAINT progress_photos_talent_fk FOREIGN KEY ( talent_talentid )
        REFERENCES talent ( talentid );

ALTER TABLE project_application
    ADD CONSTRAINT project_application_project_fk FOREIGN KEY ( project_projectid )
        REFERENCES project ( projectid );

ALTER TABLE project_application
    ADD CONSTRAINT project_application_talent_fk FOREIGN KEY ( talent_talentid )
        REFERENCES talent ( talentid );

ALTER TABLE project
    ADD CONSTRAINT project_company_fk FOREIGN KEY ( company_companyid )
        REFERENCES company ( companyid );

ALTER TABLE project_progress
    ADD CONSTRAINT project_progress_project_fk FOREIGN KEY ( project_projectid )
        REFERENCES project ( projectid );

ALTER TABLE talent
    ADD CONSTRAINT talent_user_fk FOREIGN KEY ( talentid )
        REFERENCES `Users` ( userid );

ALTER TABLE work_experience
    ADD CONSTRAINT work_experience_talent_fk FOREIGN KEY ( talent_talentid )
        REFERENCES talent ( talentid );