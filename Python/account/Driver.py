from account.Account import Account
class Driver(Account):
    def __init__(self,name,document):
        super().__init__(name,document)
    
    def toString(self):
        return self.name