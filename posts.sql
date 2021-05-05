select
    count(posts.id) as posts_count
from posts
join users on users.id = posts.user_id
where created_at BETWEEN (CURDATE() - INTERVAL 30 DAY) AND CURDATE()
and users.email = 'test@gmail.com'