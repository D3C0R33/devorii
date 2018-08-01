public class formula {

    private double a;
    private double b;
    private double c;

    public formula(double num1, double num2, double num3){
        a = num1;
        b = num2;
        c = num3;
    }

    public double firsNum(){
        {
            if (a > b && a > c) {
                return a;
            } else if (b > a && b > c) {
                return b;
            } else if (c > a && c > b) {
                return c;
            }
        }
        return firsNum();
    }

    public double secondNum(){
        {
            if(a < b && a > c){
                return a;
            }
            else if(b < a && b > c){
                return b;
            }
            else if(c < a && c > b){
                return c;
            }
        }
        return secondNum();
    }

    public double thirdNum(){
        {
            if(a < b && a < c){
                return a;
            }
            else if(b < a && b < c){
                return b;
            }
            else if(c < a && c < b){
                return c;
            }
        }
        return thirdNum();
    }

}
