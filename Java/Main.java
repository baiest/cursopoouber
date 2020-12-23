class Main{
    public static void main(String[] args) {
        System.out.println("Hola mundo");
        UberX uberx = new UberX("AMQ123", new Account("Camilo Garcia", "12385"), "Chevrolete", "Sonic");
        uberx.setPassenger(3);;
        uberx.printDataCar();
        
        UberX uberVan = new UberX("KJAK212", new Account("Estefania", "7606"), "Cevrolete", "Sonic");
        uberVan.printDataCar();
        /*Car car2 = new Car("KJAK212", new Account("Estefania", "7606"));
        car.passenger = 4;
        car2.printDataCar();*/
    }
}