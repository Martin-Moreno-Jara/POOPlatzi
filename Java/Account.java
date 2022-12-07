 package Java;

abstract class Account{
    private int id;
    private String name;
    private String document;
    private String email;
    private String password;

    public Account(int id, String name, String document, String email, String password){
        this.id = id;
        this.name = name;
        this.document = document;
        this.email = email;
        this.password = password;
    }
}