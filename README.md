## მოკლე აღწერა

მარტივი Laravel აპლიკაცია, რომელიც მონაცემთა ბაზად იყენებს Joomla v 3.8.6-ს. მოთხოვნა რაც აქ შემოდის, იიგზავნება და ინახება joomla.

აქვს მარტივი:

-   ვალიდაცია რეგისტრაციისთვის და შესვლისთვის.
-   middleware ავტორიზებული მომხმარებლის შესამოწმებლად
-   dashboard გვერდი, სადაც მოაქვს და გამოსახავს user-ს joomla-დან.

## დაყენების ინსტრუქცია

იმისთვის რომ ამ ვებსაიტმა იმუშაოს საჭიროა:

-   Laravel (x9);
-   Joomla v 3.8.6 (ლოკალურად უნდა დაინსტალირდეს)
-   Php ^8.0.2

1. გადმოწერეთ joomla და დააინსტალირეთ თქვენს მოწყობილობაზე

2. გაიარეთ რეგისტრაცია joomla-ზე

3. დააყენეთ ლარაველის მე-9 ვერსია.

4. ლარაველის config/database.php ფაილში, connections მასივში დაამატეთ joomla-ს კონფიგურაცია:

```php
'joomla_db' => [
   'driver' => 'mysql',
   'host' => '127.0.0.1',
   'port' => '3306',
   'database' => 'joomla მონაცემთა ბაზის სახელი',
   'username' => 'joomla ანგარიშის username',
   'password' => 'თქვენი joomla პაროლი',
   'charset' => 'utf8mb4',
   'collation' => 'utf8mb4_unicode_ci',
   'prefix' => 'პრეფიქსი რომელიც რეგისტრაციის დროს დააყენეთ',
   'strict' => true,
   'engine' => null,
   ],
```

5. იგივე პრინციპით შეცვალეთ .env ფიალის db მონაცემები:

```.env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=joomla_db
DB_USERNAME=joomla_user
DB_PASSWORD=new_password
```

6. გაუშვით ბრძანება: `php artisan migrate`

7. გაუშვით `php artisan serve`

ამის შემდეგ შედით ლოკალურ სერვერზე და დატესტეთ საიტი.
