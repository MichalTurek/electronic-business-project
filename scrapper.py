import random

import requests
from bs4 import BeautifulSoup
import csv
import html2text


def scrape_page_products(url, total_pages, cat_name, product_id, writer):
    h = html2text.HTML2Text()
    for i in range(1, total_pages+1):
        cat_names = 'ubrania'
        if i == 1:
            req = requests.get(url)
        else:
            req = requests.get(url + "/" + str(i))
        soup = BeautifulSoup(req.content, "html.parser")
        for product in soup.find_all("div", {"class": "product-inner-wrap"}):
            name = product.find("span", {"class": "productname"}).text
            if name == "Pakiet Dawcy Szpiku":
                continue
            name = name.replace("#", " ")
            price = product.find("div", {"class": "price f-row"}).em.text
            images_url = "https://sbmstore.pl/" + product.find("img")['data-src']
            product_url = "https://sbmstore.pl/" + product.find("a", {"class": "prodimage f-row"})['href']
            prod_site_req = requests.get(product_url)
            soup_prod = BeautifulSoup(prod_site_req.content, "html.parser")
            if soup_prod.find("div", {"class": "innersmallgallery"}):
                for image_url in soup_prod.find_all("li", {"class": "r--l-flex r--l-flex-vcenter"}):

                    images_url += ',' + 'https://sbmstore.pl/' + image_url.a['href']
            second_category_t = ''
            cat_name = soup_prod.find("li", {"class": "bred-2"}).text
            cat_name = cat_name.replace('\n', '').replace('\r', '').replace('»', '')
            if soup_prod.find("li", {"class": "bred-3"}):
                second_category = soup_prod.find("li", {"class": "bred-3"})

                second_category_t = second_category.text
                second_category_t = second_category_t.replace('\n', '').replace('\r', '').replace('»', '')
            description = soup_prod.find("div", {"class": "resetcss"})
            description = description.text
            t = description
            t = t.replace('\n', '').replace('\r', '\n')
            print(cat_name + ',' + second_category_t)
            discount = 0
            if random.randint(0, 100) > 95:
                discount = random.randint(10, 20)
            discount_from = '20.12.2022'
            discount_to = '20.01.2023'
            writer.writerow([product_id, images_url, name, cat_name + ',' + second_category_t, 'demo_'+str(product_id),
                             price, discount, discount_from,discount_to, 1, random.randint(10, 1000), description, 1, 1]
                            )
            product_id += 1
    return product_id


if __name__ == '__main__':
    with open('C:/Users/micha/PycharmProjects/pythonProject1/produkty.csv', 'w', newline='',
              encoding='utf-8') as products_file:
        product_id = 1
        writer = csv.writer(products_file, delimiter=';')
        writer.writerow(['Product ID', 'Image URLs (x,y,z...)', 'Name *', 'Kategoria', 'index #', 'Price tax included',
                         'discount percent', 'discount from', ' discount to',
                         'tax rule', 'Quantity', 'Active (0/1)', 'description', 'tax rule'])
        product_id = scrape_page_products("https://sbmstore.pl/kategoria/ubrania", 3, "ubrania", product_id, writer)
        product_id = scrape_page_products("https://sbmstore.pl/kategoria/akcesoria", 1, "akcesoria", product_id, writer)
        product_id = scrape_page_products("https://sbmstore.pl/kategoria/muzyka", 4, "muzyka", product_id, writer)

