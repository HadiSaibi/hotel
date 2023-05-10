from faker import Faker
import random

fake = Faker()

# Generate 100 rows of fake data
for i in range(100):
    # Generate fake values for each attribute
    first_name = fake.first_name()
    last_name = fake.last_name()
    date_of_birth = fake.date_of_birth(minimum_age=18, maximum_age=80)
    country = fake.country()
    street = fake.street_address()
    city = fake.city()

    # Combine values into a comma-separated string
    row = f"INSERT INTO customers (fname, lname, dob, country, street, city) \
\n VALUES ('{first_name}','{last_name}','{date_of_birth}','{country}','{street}','{city}');"

    # Print the row
    print(row)
