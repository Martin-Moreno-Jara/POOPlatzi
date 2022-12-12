package pjava;

import java.util.ArrayList;

public class Route {
    private int id;
    private ArrayList<Double> start;
    private ArrayList<Double> end;

    public Route(ArrayList<Double> start,ArrayList<Double> end){
        this.start = start;
        this.end = end;
    }
    
    public int getId(){
        return id;
    }

    public ArrayList<Double> getStart() {
        return start;
    }

    public void setStart(ArrayList<Double> start) {
        this.start = start;
    }

    public ArrayList<Double> getEnd() {
        return end;
    }

    public void setEnd(ArrayList<Double> end) {
        this.end = end;
    }

    
}
