from weather_crawler import start_crawl
from slice import start_slice
from weather_show import start_show
from csv_converter import start_convert
from delete import start_delete
from update_table import start_update

if __name__ == '__main__':
    start_delete()
    start_crawl()
    start_slice()
    start_show()
    start_convert()
    start_update()