
I have chosen [Rozetka](https://rozetka.com.ua/) as a source. This is the most popular webshop in Ukraine.

There are BTC and Dashboard sides of my application. Access to the Dashboard requires authorisation.

## Installation

- composer install
- php artisan migrate --seed (php artisan migrate:fresh --seed => if tables have already existed)
- npm install
- npm run dev (in development env)


## BTC

Existing pages: 
- Home page /. There is no content.
- Listing Search Page /products
- Listing Detail Page /products/1
- Login page /sign-in
- Registration page /sign-up

Special Livewire components:

- SearchField. I tried to create an exact copy of the original search component. User prints his request and receives the results in a dropdown. The handler looks for coincidences in products' title.
- LanguageSwitcher. This is also the visual copy of the original switcher. The backend part of the component handles the current language. But there is no effect on the site language itself (fake feature).
- Search. This component handles the logic in the Listing Search Page. I didn't make this page as "Livewire full page component", because I decided to handle all BTC pages in a single style. It is devided into filters and listing parts. There are filters for "Price" and "is Sold" product properties. Filters' selected values are stored in the GET URL params.

## Dashboard

Existing pages:

- Home page /dashboard. There is no content
- Listings List page /dashboard/products. Each item has links to a BTC product view page, to an edit page, to delete the current product. Also, there is a publishing switcher. 

- Listing Edit page /dashboard/product/1/edit
- Listing Create page /dashboard/product/create

All Dashboard pages are "Livewire full page components". Navigating behaves like SPA (without page refresh)

The layout source is picked from [Tailadmin](https://tailadmin.com/). That is why I had to implement extra tailwind config (tailwind.dashboard.config.js) to separate styles from the BTC part.

## Database

I have created only 2 extra tables: products and languages. There are also Seeders for them.


