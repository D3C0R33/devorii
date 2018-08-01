import com.sun.org.apache.xpath.internal.SourceTree;

import  java.util.*;
import java.util.Scanner;

public class Chess {

    public static void main(String args[]) {
        double num1;
        double num2;
        double num3;


        System.out.println("What is your First decimal Num of choice?");
        Scanner Input = new Scanner(System.in);
        num1 = Input.nextDouble();
        System.out.println("What is your Second decimal  Num of choice?");
        num2 = Input.nextDouble();
        System.out.println("What is your Third decimal Num of choice?");
        num3 = Input.nextDouble();

        formula sortNums = new formula(num1, num2, num3);

        System.out.println("Sorted number are: \n"
        + sortNums.firsNum() + "\n"
        + sortNums.secondNum() + "\n"
        + sortNums.thirdNum());


    }

    }//This is my method.





