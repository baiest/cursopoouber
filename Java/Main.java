class Main{
    public static void main(String[] args) {
        System.out.println("Hola mundo");
        Car car = new Car("AMQ123", new Account("Camilo Garcia", "12385"));
        Car car2 = new Car("KJAK212", new Account("Estefania", "7606"));
        car.passenger = 4;
        car.printDataCar();
        car2.printDataCar();
    }
}