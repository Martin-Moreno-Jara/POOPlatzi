class Account:
    __id = int
    __name = str
    __document = str
    __email = str
    __password = str

    def __init__(self,name,document):
        self.name=name
        self.document=document

    def getId(self):
        return self.__id
    
    def setName(self,name):
        self.__name=name
    
    def getName(self):
        return self.__name
     
    def setDocument(self,name):
        self.__document=name 

    def getDocument(self):
        return self.__document
    
    def setEmail(self,email):
        self.__email = email
    
    def getEmail(self):
        return self.__email

    def setPassword(self,password):
        self.__password=password
    
    def getPassword(self):
        return self.__password

    def printData(self):
        return "name: "+self.__name+" document: "+self.__document



    