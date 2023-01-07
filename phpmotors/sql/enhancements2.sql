-- Insert the following new client to the clients table (Note: The clientId and clientLevel fields should handle their own values and do not need to be part of this query.):
-- Tony, Stark, tony@starkent.com, Iam1ronM@n, "I am the real Ironman"
select * from clients;

INSERT INTO clients (clientFirstname, clientLastname, clientEmail, clientPassword, comment) 
VALUES ('Tony', 'Stark', 'tony@starkent.com', 'Iam1ronM@n', 'I am the real Ironman');

select * from clients;

-- Modify the Tony Stark record to change the clientLevel to 3. The previous insert query will have to have been stored in the database for the update query to work.
select * from clients;

UPDATE clients 
SET clientLevel = 3
WHERE clientEmail = 'tony@starkent.com';

select * from clients;

-- Modify the "GM Hummer" record to read "spacious interior" rather than "small interior" using a single query. Explore the SQL Replace function. It needs to be part of an Update query as shown in the code examples of the SQL Reading - Read Ch. 1, section 3.
SELECT invDescription from inventory
where invMake='GM' and invModel='Hummer';

UPDATE inventory
SET invDescription = Replace(invDescription,'small interiors', 'spacious interior')
where invMake='GM' and invModel='Hummer';

SELECT invDescription from inventory
where invMake='GM' and invModel='Hummer';

-- Use an inner join to select the invModel field from the inventory table and the classificationName field from the carclassification table for inventory items that belong to the "SUV" category. (These resources may help you: https://www.w3schools.com/sql/sql_join.asp and https://www.youtube.com/watch?v=0FEjw2HnfDs) Four records should be returned as a result of the query.
select invModel from inventory i
INNER JOIN carclassification c
on i.classificationId = c.classificationId
where c.classificationName = "SUV";

-- Delete the Jeep Wrangler from the database. [Note: You can restore the Inventory table by importing the SQL file that was used to create it again].
select * from inventory where invMake="Jeep" and invModel="Wrangler";

delete from inventory where invMake="Jeep" and invModel="Wrangler";

select * from inventory where invMake="Jeep" and invModel="Wrangler";


-- Update all records in the Inventory table to add "/phpmotors" to the beginning of the file path in the invImage and invThumbnail columns using a single query. These references may prove helpful - SQL Update, SQL Concat().
select invImage, invThumbnail from inventory;

update inventory 
set invImage = Concat("/phpmotors",invImage),
invThumbnail = Concat("/phpmotors",invThumbnail);

select invImage, invThumbnail from inventory;

