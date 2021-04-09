CREATE TABLE shop(
    id INT AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(200),
    passwords VARCHAR(200),
    shop_name VARCHAR(20),
    shop_address VARCHAR(255),
    phone_no INT(10),
    gst_no VARCHAR(20),
    signup_date DATETIME DEFAULT CURRENT_TIMESTAMP
);
ALTER TABLE shop ADD CONSTRAINT uc_shop UNIQUE (email);
ALTER TABLE shop ADD user_url VARCHAR(255);

CREATE TABLE products(
    id INT AUTO_INCREMENT PRIMARY KEY,
    shop_id INT(100),
    prod_category VARCHAR(100) NOT NULL,
    prod_subcat VARCHAR(100) NOT NULL,
    prod_img VARCHAR(200),
    product_name VARCHAR(255) NOT NULL,
    product_quant INT(10) NOT NULL,
    product_price VARCHAR(10) NOT NULL,
    last_update DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
    CONSTRAINT prod_shop FOREIGN KEY (shop_id) REFERENCES shop(id)
);
ALTER TABLE products ADD product_description VARCHAR(255);

CREATE TABLE users(
    id INT AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(255),
    phone_no INT(10),
    user_name VARCHAR(50),
    user_url VARCHAR(255),
    passwords VARCHAR(200),
    signup_date DATETIME DEFAULT CURRENT_TIMESTAMP
);
-- email should be unque