CREATE TABLE  IF NOT EXISTS UserAccountsDatabase (

	userID INT PRIMARY KEY,
    enterMasonNetID VARCHAR (8) NOT NULL,
    enterPassword VARCHAR (12) NOT NULL,
	isverified BOOL NOT NULL
    
);
