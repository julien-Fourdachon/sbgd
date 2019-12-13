# sbgd

## Database
name-> test
username-> test
password -> test
3 tables = user, rank and product.
user and rank are joined with rank_id column (1 for admin and 2 for classic user) => used in page displaying all users
user and product are joined with id(user) and owner_id(product)  => not used yet in application
2 triggers on user table before insert and update on column rank_id, if rank_id != 1(admin) OR rank_id != 2(classic user) => rank_id value set to 2;


## User case

### Admin
    login = admin
    password = admin
    He can do everything and access all sections:
        CRUD on products
        CRUD on users

### Logged in users (account created by admin)
    login = test
    password = test
    He can READ, CREATE products and add products on cart

### Guest
    On Index.php, select "continuer en tant qu'invité"
    He's only able to read Products page.




