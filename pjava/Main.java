package pjava;

import pjava.account.Driver;
import pjava.cars.UberX;

public class Main {
    public static void main(String[] args) {
        UberX uberx = new UberX("ALJ451", new Driver("Ernesto de la cruz", "234441"), "Toyota", "2019 Sandero");
        uberx.setPassenger(4);
        
        System.out.println(uberx.toString());
        
    }
}
