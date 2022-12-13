package pjava.cars;

import java.util.ArrayList;
import java.util.Map;

import pjava.account.Driver;

public class UberVan extends Car {
    private Map<String,Map<String,Integer>> typeCarAccepted;
    private ArrayList<String> seatsMaterial;
    private int passenger;
    
    public UberVan(String license, Driver driver,Map<String,Map<String,Integer>> typeCarAccepted,ArrayList<String> seatsMaterial){
        super(license,driver);
        this.typeCarAccepted = typeCarAccepted;
        this.seatsMaterial = seatsMaterial;
    }
    public UberVan(String license, Driver driver){
        super(license,driver);
    }
    
    @Override
    public void setPassenger(int passenger) {
        if(passenger==6){
            this.passenger = passenger;
        }
        else{
            System.out.println("Necesitas asignar 4 pasajeros");
        }
        
    }

    public Map<String, Map<String, Integer>> getTypeCarAccepted() {
        return typeCarAccepted;
    }

    public void setTypeCarAccepted(Map<String, Map<String, Integer>> typeCarAccepted) {
        this.typeCarAccepted = typeCarAccepted;
    }

    public ArrayList<String> getSeatsMaterial() {
        return seatsMaterial;
    }

    public void setSeatsMaterial(ArrayList<String> seatsMaterial) {
        this.seatsMaterial = seatsMaterial;
    }
    
}

