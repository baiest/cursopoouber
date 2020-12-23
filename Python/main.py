from car import Car
from account import Account
from uberX import UberX

if __name__ == '__main__':
    print("Hola mundo")
    car = Car("SAE121", Account("Andres Herrera", "FAFS454"))
    print(vars(car))
    uberX= UberX("KJKF12", Account("Camilo Garcia", "1233"), "Cheverolet", "Boldo")
    print(vars(uberX))