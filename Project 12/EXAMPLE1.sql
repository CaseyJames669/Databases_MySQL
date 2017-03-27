SELECT c1.Country1Name, c.ContinentName
from Country1 as c1 inner join Continent as c on
c.ContinentKey = c1.ContinentKey
order by c1.Country1Name;