CREATE TABLE products(
	pid INT(11) NOT NULL AUTO_INCREMENT,
	cid INT(11) NOT NULL,
	bid INT(11) NOT NULL,
    product_name VARCHAR(100) NOT NULL,
    product_price DOUBLE NOT NULL,
    product_stock INT(11) NOT NULL,
    added_date DATE NOT NULL,
    p_status ENUM('1','0') NOT NULL,
	PRIMARY KEY(pid),
    UNIQUE KEY(product_name),
    FOREIGN KEY(cid) REFERENCES categories(cid),
    FOREIGN KEY(bid) REFERENCES brands(bid)
);



SELECT p.`category_name` 
as child,c.`category_name` 
as parent,p.`status` 
FROM categories p 
LEFT JOIN categories c 
ON p.parent_cat=c.cid