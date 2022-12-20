from selenium import webdriver
from selenium.webdriver.common.by import By
from selenium.webdriver.support.wait import WebDriverWait
from selenium.webdriver.support import expected_conditions as EC
from selenium.webdriver.common.keys import Keys
from random import choice, randint
from time import sleep


class Shopping:
    def __init__(self):
        options = webdriver.ChromeOptions()
        options.add_argument('ignore-certificate-errors')
        options.add_experimental_option("detach", True)
        options.add_argument("--start-fullscreen")
        self.driver = webdriver.Chrome(chrome_options=options)
        self.land_first_page()
        self.driver.implicitly_wait(5)

    def __exit__(self, exc_type, exc_val, exc_tb):
        self.driver.quit()

    def land_first_page(self):
        self.driver.get("http://localhost:80/")

    def find_menu(self):
        menu = self.driver.find_element(By.ID, 'category-10')
        self.driver.implicitly_wait(5)
        menu.click()

    def find_categories(self):
        music = self.driver.find_element(By.XPATH, '//ul/li/ul/li[2]')
        accessories = self.driver.find_element(By.XPATH, '//ul/li/ul/li[1]')
        return [music, accessories]

    def find_products(self):
        return self.driver.find_elements(By.CLASS_NAME, 'thumbnail-container')

    def add_to_basket(self):
        quantity = self.driver.find_element(By.XPATH, "//input[@id='quantity_wanted']")
        quantity.send_keys(Keys.CONTROL + "a")
        quantity.send_keys(randint(1, 5))
        self.driver.find_element(By.CLASS_NAME, 'add-to-cart').click()
        self.driver.implicitly_wait(5)
        sleep(1)
        webdriver.ActionChains(self.driver).send_keys(Keys.ESCAPE).perform()

    def choose_product(self, category, product):
        self.find_menu()
        self.find_categories()[category].click()
        self.find_products()[product].click()
        self.add_to_basket()

    def choose_products(self):
        products_target_no = 10
        category = 0
        product = 0
        for i in range(products_target_no):
            if i == (products_target_no/2):
                category = 1
                product = 0
            self.choose_product(category, product)
            product += 1

    def remove_product(self):
        products = self.driver.find_elements(By.CLASS_NAME, 'remove-from-cart')
        if products:
            choice(products).click()

    def find_basket(self):
        self.find_menu()
        basket = self.driver.find_element(By.CLASS_NAME, 'cart-preview')
        webdriver.ActionChains(self.driver).move_to_element(basket).click().perform()

    def go_to_checkout(self):
        WebDriverWait(self.driver, 5).until(EC.element_to_be_clickable((By.CLASS_NAME, 'btn-primary')))
        self.driver.find_element(By.CLASS_NAME, 'btn-primary').click()

    def create_new_account(self):
        self.driver.find_element(By.CLASS_NAME, 'user-info').click()
        self.driver.find_element(By.CLASS_NAME, 'no-account').click()
        self.driver.find_element(By.CLASS_NAME, 'radio-inline').click()
        self.driver.find_element(By.ID, 'field-firstname').send_keys('Kacper')
        self.driver.find_element(By.ID, 'field-lastname').send_keys('Baranski')
        self.driver.find_element(By.ID, 'field-email').send_keys('kacpaaaaaaaaaaaaaaaa@gmail.com')
        self.driver.find_element(By.ID, 'field-password').send_keys('Baran123!')
        self.driver.find_element(By.ID, 'field-birthday').send_keys('2001-01-20')
        self.driver.find_element(By.NAME, 'customer_privacy').click()
        self.driver.implicitly_wait(5)
        self.driver.find_element(By.CLASS_NAME, 'btn-primary').click()

    def enter_address(self):
        self.driver.find_element(By.ID, 'field-address1').send_keys('ul. Glinki 7')
        self.driver.find_element(By.ID, 'field-postcode').send_keys('85-174')
        self.driver.find_element(By.ID, 'field-city').send_keys('Bydgoszcz')
        WebDriverWait(self.driver, 5).until(EC.element_to_be_clickable((By.NAME, 'confirm-addresses')))
        self.driver.find_element(By.NAME, 'confirm-addresses').click()

    def choose_delivery_method(self):
        self.driver.find_element(By.ID, 'delivery_option_13').click()
        WebDriverWait(self.driver, 5).until(EC.element_to_be_clickable((By.NAME, 'confirmDeliveryOption')))
        self.driver.find_element(By.NAME, 'confirmDeliveryOption').click()

    def choose_payment_option(self):
        pay = self.driver.find_element(By.ID, 'payment-option-2')
        pay.click()
        self.driver.find_element(By.ID, 'conditions_to_approve[terms-and-conditions]').click()
        self.driver.find_element(By.ID, 'payment-confirmation').find_element(By.TAG_NAME, 'button').click()

    def check_order_status(self):
        self.land_first_page()
        self.driver.find_element(By.CLASS_NAME, 'user-info').find_element(By.CLASS_NAME, 'account').click()
        self.driver.find_element(By.ID, 'history-link').click()
        WebDriverWait(self.driver, 5).until(EC.element_to_be_clickable((By.CLASS_NAME, 'view-order-details-link')))
        self.driver.find_element(By.CLASS_NAME, 'view-order-details-link').click()

    def test(self):
        self.create_new_account()
        self.choose_products()
        self.find_basket()
        self.remove_product()
        self.go_to_checkout()
        self.enter_address()
        self.choose_delivery_method()
        self.choose_payment_option()
        self.check_order_status()
