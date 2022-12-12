from payment.Payment import Payment
class Paypal(Payment):
    email = str
    def __init__(self,email):
        self.email = email