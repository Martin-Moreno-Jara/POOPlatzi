package Java;

public class Car {
    private int id;
    private String license;
    private String driver;
    private int passenger;

    public Car(int id, String license, String driver, int passenger){
        this.id = id;
        this.license = license;
        this.driver = driver;
        this.passenger = passenger;
    }
    public String getLicense(){
        return this.license;
    }

    @Override
    public String toString(){
        return "id: "+id+" license: "+license+" driver: "+driver+" passenger: "+passenger;
    }
    
}
