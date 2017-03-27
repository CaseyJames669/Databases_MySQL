SELECT c3.Country3Name, c.ContinentName
from Country3 as c3 inner join Continent as c on
c.ContinentKey = c3.ContinentKey