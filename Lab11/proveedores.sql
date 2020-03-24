
/*
Guillermo A. Vazquez Cervantes
Laboratorio 1 Bases de Datos. 
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