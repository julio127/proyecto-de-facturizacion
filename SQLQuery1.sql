--declarando el cursor
    declare cursor1 cursor
          for select * from dbo.Employees
--abriendo el cursor
    open cursor1
	--y navegar
	     fetch next from cursor1
		 --cerrar el cursor		 
close cursor1
--liberar de memoria
    deallocate cursor1

declare @EmployeeID varchar(29),
@lastname nvarchar(20),
@firstname nvarchar(10)
declare Employees cursor
for select EmployeeID,lastname,firstname
from Employees
open Employees
fetch Employees into @EmployeeID,@lastname,@firstname
while(@@FETCH_STATUS=0)
begin
print @EmployeeID +''+ @lastname +''+ @firstname
fetch Employees into @EmployeeID,@lastname,@firstname
end
close Employees
deallocate Employees