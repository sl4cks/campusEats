CREATE TABLE IF NOT EXISTS FormsDatabase (

	formID INT(10) UNSIGNED PRIMARY KEY,
	orderName VARCHAR(8) NOT NULL,
    orderLocation VARCHAR(100) NOT NULL,
	delivLocation VARCHAR(100) NOT NULL,
    comments VARCHAR(200) NOT NULL,
    dateID DATETIME
    
);