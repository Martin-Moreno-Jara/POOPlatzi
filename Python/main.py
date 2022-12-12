from account.Driver import Driver
from cars.UberX import UberX
print("holamundo")

conductor = Driver("joe","3545454")

print(vars(conductor))

carro = UberX("AFR176",vars(conductor),"Tesla","Melon Musk")
carro.setBrand("Chevrolet")

print(vars(carro))
print(carro.getLicense())