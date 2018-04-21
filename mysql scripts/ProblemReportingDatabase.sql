CREATE TABLE  IF NOT EXISTS  ProblemReportingDatabase (

	formID INT(10) UNSIGNED PRIMARY KEY,
	userNetID VARCHAR(8) NOT NULL,
    courierID INT(8) NOT NULL,
    dateID TIMESTAMP
    
);

