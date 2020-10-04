import requests
import re


class MyCrawler:
    """爬虫框架，保存数据"""
    def __init__(self, filename):
        self.filename = filename
    """初始化"""

    def download(self, url):
        req = requests.get(url)
        req = req.content.decode('utf-8')
        return req
    """请求函数，返回网页文本"""

    def extract(self, pattern, content):
        result = re.findall(pattern, content)
        return result
    """利用正则表达式抽取网页信息，返回所需文本"""

    def save(self, info):
        with open(self.filename, 'a', encoding='utf-8') as filem:
            for item in info:
                filem.write(' '.join(item) + '\n')
                print("文件保存成功！")
    """保存文本"""

    def crawl(self, url, pattern):
        content = self.download(url)
        info = self.extract(pattern, content)
        self.save(info)
    """调用爬虫"""


def start_crawl():
    weather_urls = [
        "http://www.weather.com.cn/textFC/hb.shtml",
        "http://www.weather.com.cn/textFC/db.shtml",
        "http://www.weather.com.cn/textFC/hd.shtml",
        "http://www.weather.com.cn/textFC/hz.shtml",
        "http://www.weather.com.cn/textFC/hn.shtml",
        "http://www.weather.com.cn/textFC/xb.shtml",
        "http://www.weather.com.cn/textFC/xn.shtml",
        "http://www.weather.com.cn/textFC/gat.shtml"
    ]
    """提取地域代码"""
    regex = '<td .*?">\n<a href=".*?" .*?">(.*?)</a></td>\n<td .*?">(.*?)</td>\n<td .*?">\n<span>(.*?)</span>\n<span .*?">(.*?)</span></td>\n<td .*?">(.*?)</td>\n<td .*?">(.*?)</td>\n<td .*?">\n<span>(.*?)</span>\n<span .*?">(.*?)</span></td>\n<td .*?">(.*?)</td>\n<td .*?">\n<a href=".*?" .*?">'
    for url in weather_urls:
        weather_crawl = MyCrawler('weather.txt')
        weather_crawl.crawl(url, regex)
