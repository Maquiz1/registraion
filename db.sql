CREATE TABLE `employee` (
  `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `emp_name` varchar(80) NOT NULL, 
  `salary` varchar(20) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `city` varchar(80) NOT NULL,
  `email` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



-- CREATE TABLE products(
-- 	pid INT(11) NOT NULL AUTO_INCREMENT,
-- 	cid INT(11) NOT NULL,
-- 	bid INT(11) NOT NULL,
--     product_name VARCHAR(100) NOT NULL,
--     product_price DOUBLE NOT NULL,
--     product_stock INT(11) NOT NULL,
--     added_date DATE NOT NULL,
--     p_status ENUM('1','0') NOT NULL,
-- 	PRIMARY KEY(pid),
--     UNIQUE KEY(product_name),
--     FOREIGN KEY(cid) REFERENCES categories(cid),
--     FOREIGN KEY(bid) REFERENCES brands(bid)
-- );



-- SELECT p.`category_name` 
-- as child,c.`category_name` 
-- as parent,p.`status` 
-- FROM categories p 
-- LEFT JOIN categories c 
-- ON p.parent_cat=c.cid



-- SELECT visit.`project_id` AS STUDY_NAME,
--        visit.name AS companies_name,
--        acquisitions.company_permalink AS acquisitions_permalink,
--        acquisitions.acquired_at AS acquired_date
--   FROM tutorial.crunchbase_companies companies
--   LEFT JOIN tutorial.crunchbase_acquisitions acquisitions
--     ON companies.permalink = acquisitions.company_permalink
--  WHERE acquisitions.company_permalink != '/company/1000memories'
--     OR acquisitions.company_permalink IS NULL
--  ORDER BY 1



--  SELECT clients.`study_id` AS PATIENT_ID, 
--         clients.`status` AS STATUS, 
--         visit.`visit_group` AS VISIT_GROUP, 
--         visit.`client_id` AS VISIT_GROUP 
-- FROM clients 
-- LEFT JOIN visit 
-- ON clients.study_id = visit.client_id 
-- WHERE visit.`visit_group` IS NULL AND 
-- clients.`status` = 1 
-- ORDER BY `client_id`


--  SELECT clients.`study_id` AS PATIENT_ID, 
--         clients.`status` AS STATUS, 
--         visit.`visit_group` AS VISIT_GROUP, 
--         visit.`client_id` AS VISIT_GROUP 
-- FROM clients 
-- INNER JOIN visit 
-- ON clients.study_id = visit.client_id 
-- WHERE visit.`visit_group` IS NULL AND 
-- clients.`status` = 1 
-- ORDER BY `client_id`


-- SELECT DISTINCT clients.`study_id`, 
--     clients.`status`
-- FROM clients 
-- RIGHT JOIN visit 
-- ON clients.id = visit.client_id 
-- WHERE visit.`visit_group` IS NOT NULL
-- ORDER BY `study_id`