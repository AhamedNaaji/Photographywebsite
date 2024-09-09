CREATE TABLE package (
                         Package_ID INT(11) NOT NULL AUTO_INCREMENT,
                         PackageName VARCHAR(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
                         Image_one VARCHAR(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
                         Image_two VARCHAR(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
                         Multiple_images VARCHAR(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
                         Package_Price INT(10) NOT NULL,
                         PRIMARY KEY (Package_ID)
);

INSERT INTO package (PackageName, Image_one, Image_two, Multiple_images, Package_Price) VALUES
('Basic Package', 'image1.jpg', 'image2.jpg', 'image3.jpg,image4.jpg', 100),
('Standard Package', 'image5.jpg', 'image6.jpg', 'image7.jpg,image8.jpg', 200),
('Premium Package', 'image9.jpg', 'image10.jpg', 'image11.jpg,image12.jpg', 300),
('Deluxe Package', 'image13.jpg', 'image14.jpg', 'image15.jpg,image16.jpg', 400),
('Ultimate Package', 'image17.jpg', 'image18.jpg', 'image19.jpg,image20.jpg', 500);


CREATE TABLE booking (
                         ID INT(11) NOT NULL AUTO_INCREMENT,
                         name VARCHAR(255) NOT NULL,
                         mobile VARCHAR(255) NOT NULL,
                         address VARCHAR(255) NOT NULL,
                         date DATE NOT NULL,
                         location VARCHAR(255) NOT NULL,
                         package VARCHAR(255) NOT NULL,
                         PRIMARY KEY (ID)
);

