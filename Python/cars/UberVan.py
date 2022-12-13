from cars.Car import Car
class UberVan(Car):
    __typeCarAccepted = []
    __seatsMaterial = []
    __passenger = int
    def __init__(self,license,driver,typeCarAccepted,seatsMaterial):
        super().__init__(license,driver)
        self.__typeCarAccepted = typeCarAccepted
        self.__seatsMaterial = seatsMaterial
    

    def setTypeCarAccepted(self,typeCar):
        self.__typeCarAccepted=typeCar

    def getTypeCarAccepted(self):
        return self.__typeCarAccepted
    
    def setSeatsMaterial(self,seats):
        self.__seatsMaterial=seats
    
    def getSeatsMaterial(self):
        return self.__seatsMaterial

    def setPassenger(self, passenger):
        if passenger == 6:
            self.__passenger=passenger
        else:
            print("Debe tener 6 pasajeros")

    def getPassenger(self):
        return self.__passenger