from account.Driver import Driver
from cars.UberX import UberX
from cars.UberVan import UberVan
from cars.Car import Car

carro = UberX("AFR176",Driver("Josep","45667"),"Tesla","Melon Musk")
carro.setBrand("Chevrolet")
carro.setPassenger(4)

car = Car("ADF234",Driver("Anastasia","46843"))
car.setPassenger(4)

ubervan = UberVan("LJU098",Driver("Felipe","47567"),["None"],["Again none"])
ubervan.setPassenger(6)

def printLines():
    print("-"*50)

print("uberx",carro.__str__())
printLines()
print("carro",car.__str__())
printLines()
print("ubervan",ubervan.__str__())
printLines()
