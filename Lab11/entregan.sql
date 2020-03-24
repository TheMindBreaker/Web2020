
/*
entregan.sql 
*/
SET DATEFORMAT dmy
BULK INSERT BasesDeDatos.[Entregan]
   FROM 'c:/entregan.csv'
   WITH 
      (
         CODEPAGE = 'ACP',
         FIELDTERMINATOR = ',',
         ROWTERMINATOR = '\n'
      )

SELECT  * FROM Entregan;