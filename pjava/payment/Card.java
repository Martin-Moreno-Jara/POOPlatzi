package pjava.payment;

public class Card extends Payment {
    private String number;
    private String cvv;
    private String date;

    public Card(String number,String cvv,String date){
        this.number = number;
        this.cvv = cvv;
        this.date = date;
    }

    public String getNumber() {
        return number;
    }

    public void setNumber(String number) {
        this.number = number;
    }

    public String getCvv() {
        return cvv;
    }

    public void setCvv(String cvv) {
        this.cvv = cvv;
    }

    public String getDate() {
        return date;
    }

    public void setDate(String date) {
        this.date = date;
    }
    
}
