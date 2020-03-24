
/*
Guillermo A. Vazquez Cervantes
Laboratorio 1 Bases de Datos. 
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