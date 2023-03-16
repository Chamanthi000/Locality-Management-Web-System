# Locality Management Web System
This is a dynamic website which is built using HTML, CSS and Bootstrap in the frontend, PHP and MySQL in the backend

CHECK THE DOCUMENTATION HERE: https://github.com/Chamanthi000/Locality-Management-Web-System/blob/master/final%20documentation.pdf

This project aims to develop an efficient locality management
system which helps to increase interaction and unity among the localists.

# OBJECTIVES OF PROJECT
 
## 1.COLLECTING USER REQUIREMNETS

To design the database, we need to get the information about various aspects regarding the locality.

The information required regarding a localist are local id, name, contact no,
gender,email-address etc.

The information regarding shops like owner of shop, type of products or services
available, shop type, address, contact no. ,rent/own etc.

The information regarding houses like residence type, no. of members in the
family, head of the family,house address etc.

There exists 2 types of users for this system,1)The Localist,2)The Admin
The Localist or Admin need to type thei USER ID and PASSWORD to login into the
system.

Localists can sign up , post events, post local problems ,post mini- services,post
information houses or shops on sale or rent .

The Admin can update the details or delete the details of localists or posts of the
localists regarding events,local-problems,local-services,mini-services,sale and
rents.

## 2.DATABASE DESIGN USING E-R DIAGRAM

The relational model depicts the e-r diagram of the project.

### ENTITIES:

• LOCALISTS: It stores the attributes local_id as local id of the localist, name
as the name of the localist, designation as designation of the localist,
contact_no as contact no of the localist, gender of the localist.

• HOUSES: It stores the attributes h_id as the house id , housename as the
name of the house, d_ no as the door no of the house, residence_type
stores the value whether the house is apartment or individual, head_of_
fam as the head of the family,r_o as the rent/own house of the localist.

• LOCAL_SERVICES: It stores the attributes l_id as the local servicer id
,Shop_name stores the name of the shop, r_o specifies whether the shop
is taken for rent or own, specifications show the specialities of the shop.

• EVENTS: It stores the attributes event_id as id of the event, ename as the
event name, e_description describes about the event.

• LOCALPROBLEMS: It stores the attributes l_id as the problem id, lname as
the problem name, l_description describe the problem.

• MINISERVICES: It stores the attributes s_id as the service id, sname as the
service name, s_description describes the service.

• TO_LET: It stores the attributes local_id as the localist id,
d_no as the door no of rental place, type as the individual or flat, rent as
the approximate amount to be paid as rent.

• SALE: I t stores the attributes local_id as the localist id,
d_no as the door no of the house or store on sale, type as the individual or
flat

### RELATIONSHIPS

• RESIDES: It is a relation between localist and houses entity. It stores
joindate as the join date of the localists and local_id as the local id of the
localist.

• USES: It is relation between localist and local_services. It stores joindate as
the start date of the shop.

• E_POSTS: It acts as a relation between events and localists.

• LP_POSTS: It acts as a relation between local_problems and localists.

• CANDO: It acts as a relation between houses and miniservices.

### 3. E-R DIAGRAM

 DATABASE DESIGN USING RELATIONAL MODEL



<img width="448" alt="Screenshot 2023-03-16 at 2 09 15 PM" src="https://user-images.githubusercontent.com/45826511/225713597-39f1bc8d-e602-4050-80fd-837232ff9f3b.png">

