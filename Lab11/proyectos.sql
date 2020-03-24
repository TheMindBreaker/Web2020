
/*
Guillermo A. Vazquez Cervantes
Laboratorio 1 Bases de Datos. 
proyectos.sql 
*/

BULK INSERT BasesDeDatos.[Proyectos]
   FROM 'c:/proyectos.csv'
   WITH 
      (
         CODEPAGE = 'ACP',
         FIELDTERMINATOR = ',',
         ROWTERMINATOR = '\n'
      );

SELECT  * FROM Proyectos;