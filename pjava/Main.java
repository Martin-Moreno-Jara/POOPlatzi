package pjava;

import pjava.account.Driver;
import pjava.cars.UberX;
import pjava.cars.*;

public class Main {
    public static void main(String[] args) {
        UberX uberx = new UberX("ALJ451", new Driver("Ernesto de la cruz", "234441"), "Toyota", "2019 Sandero");
        uberx.setPassenger(4);

        Car carrito = new Car("ADF661",new Driver("Mariano","12347"));

        
        System.out.println(uberx.toString());
        System.out.println();
        System.out.println(carrito.toString());
        
    }
}
