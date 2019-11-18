create database blog; 
 
 
use blog;
 

create table category( 
    id int not null primary key, 
   name varchar(50)
   ); 
 
 
create table footer ( 
   id int not null primary key,     
    note varchar(255) 
    ); 
 
 
create table page ( 
    id int not null primary key,    
    name varchar(50),      
    body text
     ); 
 
 
create table post ( 
    id int not null primary key, 
    cat int, 
   title varchar(255), 
   body text, 
   image varchar(255),
   author varchar(50), 
   tags varchar(255), 
   date timestamp 
   
    ); 
 
 
create table slogan( 
    id int not null primary key,    
    title varchar(255),      
    slogan varchar(255), 
	logo varchar(255)
     );
	 
	 create table social( 
    id int not null primary key,    
    fb varchar(255),      
    tw varchar(255), 
	in varchar(255),
	gp varchar(255)
     );
	 
	  create table user( 
    id int not null primary key,    
    username varchar(50),      
    password varchar(32)	
	    );