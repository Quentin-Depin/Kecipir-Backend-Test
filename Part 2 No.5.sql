select c.film as Nama_Category, count(c.category_id) as Jumlah_Film
from film_category fc
join category c on c.category_id = fc.category_id
group by c.category_id
order by count(fc.category_id) desc
limit 5;