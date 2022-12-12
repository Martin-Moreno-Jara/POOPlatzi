package pjava.cars;
import pjava.account.Driver;

public class Car {
    private int id;

    private String license;
    private Driver driver;
    private int passenger;

    public Car(String license, Driver driver){ //constructor
        this.license = license;
        this.driver = driver;
    }

    public void setLicense(String license) {
        this.license = license;
    }
    
    public String getLicense(){
        return this.license;
    }

    public Driver getDriver() {
        return driver;
    }
    public void setDriver(Driver driver) {
        this.driver = driver;
    }
    public int getPassenger() {
        return passenger;
    }
    public void setPassenger(int passenger) {
        if(passenger==4){
        this.passenger = passenger;
        }
        else{
            System.out.println("Cantidad de pasajeros no valida, solo 4");
        }
    }

    public int getId() {
        return id;
    }

    @Override
    public String toString(){
        return "id: "+id+" license: "+license+" driver: "+driver.getName()+" passenger: "+passenger;
    }
    
}
