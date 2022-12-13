class Route:
    __id = int
    __start = []
    __end = []

    def __init__(self,start,end):
        self.__start = start
        self.__end = end
    
    def getId(self):
        return self.__id
    
    def setStart(self,start):
        self.__start=start
    
    def getStart(self):
        return self.__start
    
    def setEnd(self,end):
        self.__end=end
    
    def getEnd(self):
        return self.__end