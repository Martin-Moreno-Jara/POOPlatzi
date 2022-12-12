package pjava.payment;

public class Paypal extends Payment {
    private String email;
    public Paypal(String email){
        this.email = email;
    }

    public void setEmail(String email){
        this.email = email;
    }

    public String getEmail(){
        return email;
    }

}
