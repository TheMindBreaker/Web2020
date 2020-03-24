
/*
proveedores.sql 
*/

BULK INSERT BasesDeDatos.[Proveedores]
   FROM 'c:/proveedores.csv'
   WITH 
      (
         CODEPAGE = 'ACP',
         FIELDTERMINATOR = ',',
         ROWTERMINATOR = '\n'
      );

SELECT  * FROM Proveedores;