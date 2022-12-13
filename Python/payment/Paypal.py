from payment.Payment import Payment
class Paypal(Payment):
    __email = str
    def __init__(self,email):
        self.__email = email
    
    def setEmail(self,email):
        self.__email=email
    
    def getEmail(self):
        return self.__email