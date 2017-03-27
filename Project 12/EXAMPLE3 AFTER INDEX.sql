SELECT c2.Country2Name, c.ContinentName
from Country2 as c2 inner join Continent as c on
c.ContinentKey = c2.ContinentKey
order by c2.Country2Name;