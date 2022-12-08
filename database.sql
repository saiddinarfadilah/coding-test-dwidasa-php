CREATE DATABASE db_dwidasa;

CREATE TABLE Bank(
                     idBank INT NOT NULL PRIMARY KEY,
                     Name VARCHAR(100) NOT NULL ,
                     Capitalization INT NOT NULL
)ENGINE = InnoDB;

CREATE TABLE Branch(
                       idBranch INT NOT NULL PRIMARY KEY,
                       Bank_idBank INT NOT NULL ,
                       Address VARCHAR(255) NOT NULL,
                       CONSTRAINT fk_branch_bank FOREIGN KEY Branch(Bank_idBank) REFERENCES Bank(idBank)
)ENGINE = InnoDB;

CREATE TABLE Worker(
                       idWorker INT NOT NULL PRIMARY KEY ,
                       Name VARCHAR(50) NOT NULL ,
                       Position VARCHAR(100) NOT NULL ,
                       Branch_idBranch INT NOT NULL ,
                       CONSTRAINT fk_worker_branch FOREIGN KEY Worker(Branch_idBranch) REFERENCES Branch(idBranch)
)ENGINE = InnoDB;

CREATE TABLE Client(
                       idClient INT NOT NULL PRIMARY KEY ,
                       Name VARCHAR(50),
                       Branch_idBranch INT NOT NULL ,
                       CONSTRAINT fk_client_branch FOREIGN KEY Client(Branch_idBranch) REFERENCES Branch(idBranch)
)ENGINE = InnoDB;

CREATE TABLE Account(
                        idAccount INT NOT NULL PRIMARY KEY ,
                        Balance INT NOT NULL DEFAULT 0,
                        Client_idClient INT NOT NULL ,
                        open_date DATE,
                        CONSTRAINT fk_account_client FOREIGN KEY Account(Client_idClient) REFERENCES Client(idClient)
)ENGINE = InnoDB;

CREATE TABLE Loans(
                      idLoan INT NOT NULL PRIMARY KEY ,
                      Ammount INT NOT NULL DEFAULT 0,
                      Account_idAccount INT NOT NULL ,
                      loan_date DATE,
                      CONSTRAINT fk_loan_account FOREIGN KEY Loans(Account_idAccount) REFERENCES Account(idAccount)
)ENGINE = InnoDB;

INSERT INTO Bank(idBank, Name, Capitalization) VALUES (1, "BRI", 100000);
INSERT INTO Branch(idBranch, Bank_idBank, Address) VALUES (01, 1, "Jakarta");
INSERT INTO Worker(idWorker, Name, Position, Branch_idBranch) VALUES (001, "Asep", "Teller", 01);
