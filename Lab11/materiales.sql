
/*
Materiales.sql 
*/

BULK INSERT BasesDeDatos.[materiales]
   FROM 'c:/materiales.csv'
   WITH 
      (
         CODEPAGE = 'ACP',
         FIELDTERMINATOR = ',',
         ROWTERMINATOR = '\n'
      );

SELECT  * FROM Materiales;