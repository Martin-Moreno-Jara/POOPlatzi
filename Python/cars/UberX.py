from cars.Car import Car
class UberX(Car):
    __brand = str
    __model = str
    def __init__(self,license,driver,brand,model):
        super().__init__(license,driver)
        self.__brand = brand
        self.__model = model

    def setBrand(self,brand):
        self.__brand=brand
    
    def getBrand(self):
        return self.__brand

    def setModel(self,model):
        self.__model=model
    
    def getModel(self):
        return self.__model

