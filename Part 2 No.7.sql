select c.film, sum(f.rental_rate)
from film f
join film_category fc on fc.film_id = f.film_id
join category c on c.category_id = fc.category_id
group by fc.category_id
order by sum(f.rental_rate) desc
limit 3;