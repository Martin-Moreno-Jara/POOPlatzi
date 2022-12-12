from account.Driver import Driver
class Car:
    __id = int
    __license = str
    __driver = Driver
    __passenger = int
    
    def __init__(self,license,driver):
        self.__license=license
        self.__driver = driver
    
    def getId(self):
        return self.__id
    
    def setLicense(self,licen):
        self.__license=licen
    
    def getLicense(self):
        return self.__license
    
    def setDriver(self,driver):
        self.__driver=driver
    
    def getDriver(self):
        return self.__driver
    
    def setPassenger(self,passenger):
        self.__passenger=passenger
    
    def getPassenger(self):
        return self.__passenger