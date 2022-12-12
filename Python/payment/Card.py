from payment.Payment import Payment
class Card(Payment):
    number = str
    cvv = str
    date = str
    def __init__(self,number,cvv,date):
        self.number = number
        self.cvv = cvv
        self.date = date
        