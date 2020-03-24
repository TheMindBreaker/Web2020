
/* 
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