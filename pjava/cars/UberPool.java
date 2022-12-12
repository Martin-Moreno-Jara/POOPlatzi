package pjava.cars;
import pjava.account.Driver;

public class UberPool extends Car{
    private String brand;
    private String model;

    public UberPool(String license,Driver driver, String brand, String model){
        super(license,driver);
        this.brand = brand;
        this.model = model;
    }

    public String getBrand() {
        return brand;
    }

    public void setBrand(String brand) {
        this.brand = brand;
    }

    public String getModel() {
        return model;
    }

    public void setModel(String model) {
        this.model = model;
    }

}
