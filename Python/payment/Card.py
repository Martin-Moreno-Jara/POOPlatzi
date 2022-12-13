from payment.Payment import Payment
class Card(Payment):
    __number = str
    __cvv = str
    __date = str
    def __init__(self,number,cvv,date):
        self.__number = number
        self.__cvv = cvv
        self.__date = date

    def setNumber(self,number):
        self.__number=number
    
    def getNumber(self):
        return self.__number

    def setCvv(self,cvv):
        self.__cvv=cvv
    
    def getCvv(self):
        return self.__cvv

    def setDate(self,date):
        self.__date=date
    
    def getDate(self):
        return self.__date