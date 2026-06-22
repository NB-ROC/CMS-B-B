-- @phase one
UsersID INT PRIMARY KEY auto_increment NOT NULL
username VARCHAR(255) NOT NULL 
password VARCHAR(255) NOT NULL
role INT NOT NULL

-- @phase two
ADD CONSTRAINT Users_Roles_FK FOREIGN KEY (`role`) REFERENCES bnb_database.Roles(RolesID)