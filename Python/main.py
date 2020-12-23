from car import Car
from account import Account
if __name__ == '__main__':
    print("Hola mundo")
    car = Car("SAE121", Account("Andres Herrera", "FAFS454"))
    print(vars(car))