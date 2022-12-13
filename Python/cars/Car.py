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
        if passenger ==4:
            self.__passenger=passenger
        else:
            print("Debe tener 4 pasajeros")

    def getPassenger(self):
        return self.__passenger
    
    def __str__(self) :
        return "License: ",self.__license," Driver: ",self.__driver.__str__()
    