#Technical task - Backend developer - Devla d.o.o
Your task is to create a basic shop checkout process API (without the payment part). The
requirements are following:
- Only a logged in user can buy a product
- Only shop admin user can add a new product
- Logged in user can see a list of products
- Logged in user can see a single product resource
- User can order a product
- There are multiple order steps:

1. User can add one or multiple products to cart - order status: created
2. User then proceeds to the checkout page, where they will enter their
   address - order status: address_saved
3. User completes the order (this is where payment steps would go, but
   instead, just create a “complete order” action which marks the order as
   complete) - order status: complete

- User can see a list of their orders
- Shop admin can see a list of all orders
  User model data:
- First name
- Last name
- Email
- Address
- Postal code
- Country
  Product data:
- Name
- Price (value + currency)
- Number of available products in stock
  Order data:
- User (buyer)
- Product(s)
- Order status
  There is only one shop, so no shop data is necessary. There is no need for a registration
  function, you can add user data (first name, last name, email) using seeders.

Bonus points for:
- Using Laravel
- Code cleanliness
- Design patterns
- Testing

#The solution

##Approach

The solution was designed following the test requirements and bonus questions. 
The solution was upgraded with the facade design pattern. 


##Features

###Login
Laravel Sanctum package was used to authenticate API users and assign them an API token with special abilities.
Since this is a small "project" I only designed 2 abilities SHOP_ADMIN and USER, which can be found 
in an User.php model as a constant. I could also use a Spatie Role package to achieve this.

###Json Response Macros
Since I designed and API I created two macros to help me return a standardized json response 
for my "frontend". 

###Resources

Two resources were created for handling the transformation of data to Json format:

- OrderResource.php
- ProductResource.php

###Shop service provider and ShopFacade
To get the bonus points for the "Design patterns" category I designed a simple Facade
for my Shop service sigleton bound in the app. There was not a specific problem to solve
by using some other design patterns. I don't want to invent the problems just to solve them.
Maybe I'm wrong here, I'm open for criticism!  😊

###Shop service and the controllers

I used my shop service to handle the shop business logic and I used my controllers
to get and validate data for the business logic.
As one of the requirements for the order said the following:
- User completes the order (this is where payment steps would go, but
instead, just create a “complete order” action which marks the order as
complete) - order status: complete

I created an invokable action called CompleteOrder.php

The app also checks the availability of the items when creating new order or adding the products to existing one.

###Testing
I wrote few simple tests to test some of the routes and their responses.

###Price, currency and country storage
I stored price as an integer to make communication to the external APIs more easy.
The currency and country data was imported by raw sql files and a model was created for them.







