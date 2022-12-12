package pjava.cars;

import java.util.ArrayList;
import java.util.Map;

import pjava.account.Driver;

public class UberBlack extends Car {
    private Map<String,Map<String,Integer>> typeCarAccepted;
    private ArrayList<String> seatsMaterial;

    public UberBlack(String license, Driver driver,Map<String,Map<String,Integer>> typeCarAccepted,ArrayList<String> seatsMaterial){
        super(license,driver);
        this.typeCarAccepted = typeCarAccepted;
        this.seatsMaterial = seatsMaterial;
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
